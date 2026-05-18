<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Disbursement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class LedgerController extends Controller
{
    /**
     * POST /api/campaigns/{id}/donations [JWT - Donatur]
     */
    public function storeDonation(Request $request, string $id)
    {
        // Inter-Service: Validasi campaign dari Campaign Service
        $campaign = $this->getCampaignFromService($id);

        if (!$campaign) {
            return response()->json([
                'error' => ['message' => 'Campaign tidak ditemukan', 'code' => 404]
            ], 404);
        }

        if ($campaign['status'] !== 'Aktif') {
            return response()->json([
                'error' => ['message' => 'Campaign sudah tidak aktif, tidak bisa menerima donasi', 'code' => 400]
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'amount'     => 'required|numeric|min:10000',
            'donor_name' => 'required|string|max:255',
            'message'    => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => ['message' => 'Validasi gagal', 'code' => 422, 'details' => $validator->errors()]
            ], 422);
        }

        $donation = Donation::create([
            'campaign_id' => $id,
            'user_id'     => auth()->id(),
            'amount'      => $request->amount,
            'donor_name'  => $request->donor_name,
            'message'     => $request->message,
        ]);

        return response()->json([
            'message' => 'Donasi berhasil dicatat',
            'data'    => ['donation' => $donation]
        ], 201);
    }

    /**
     * POST /api/campaigns/{id}/disbursements [JWT - Campaigner]
     */
    public function storeDisbursement(Request $request, string $id)
    {
        // Inter-Service: Validasi campaign & kepemilikan
        $campaign = $this->getCampaignFromService($id);

        if (!$campaign) {
            return response()->json([
                'error' => ['message' => 'Campaign tidak ditemukan', 'code' => 404]
            ], 404);
        }

        if ((int) $campaign['user_id'] !== auth()->id()) {
            return response()->json([
                'error' => ['message' => 'Anda tidak memiliki akses untuk mencairkan dana campaign ini', 'code' => 403]
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'amount'      => 'required|numeric|min:1000',
            'description' => 'required|string|max:500',
            'proof'       => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => ['message' => 'Validasi gagal', 'code' => 422, 'details' => $validator->errors()]
            ], 422);
        }

        $data = [
            'campaign_id' => $id,
            'user_id'     => auth()->id(),
            'amount'      => $request->amount,
            'description' => $request->description,
        ];

        if ($request->hasFile('proof')) {
            $data['proof'] = $request->file('proof')->store('disbursements', 'public');
        }

        $disbursement = Disbursement::create($data);

        return response()->json([
            'message' => 'Pencairan dana berhasil dicatat',
            'data'    => ['disbursement' => $disbursement]
        ], 201);
    }

    /**
     * GET /api/campaigns/{id}/logs
     */
    public function logs(string $id)
    {
        // Inter-Service: Validasi campaign ada
        $campaign = $this->getCampaignFromService($id);

        if (!$campaign) {
            return response()->json([
                'error' => ['message' => 'Campaign tidak ditemukan', 'code' => 404]
            ], 404);
        }

        $donations = Donation::where('campaign_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        $disbursements = Disbursement::where('campaign_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'message' => 'Log transparansi berhasil diambil',
            'data'    => [
                'campaign_id'   => (int) $id,
                'donations'     => $donations,
                'disbursements' => $disbursements,
            ]
        ]);
    }

    /**
     * Inter-Service Communication: Call Campaign Service (Port 8002)
     */
    private function getCampaignFromService(string $id): ?array
    {
        $campaignServiceUrl = env('CAMPAIGN_SERVICE_URL', 'http://localhost:8002');

        try {
            $response = Http::timeout(5)->get("{$campaignServiceUrl}/api/campaigns/{$id}");

            if ($response->failed()) {
                return null;
            }

            return $response->json('data.campaign');
        } catch (\Exception $e) {
            return null;
        }
    }
}
