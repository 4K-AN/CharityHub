<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Disbursement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LedgerController extends Controller
{
    /**
     * POST /api/campaigns/{id}/donations [JWT - Donatur]
     * Mencatat donasi baru ke campaign. Minimal donasi Rp 10.000.
     */
    public function storeDonation(Request $request, string $id)
    {
        $campaign = Campaign::find($id);

        if (!$campaign) {
            return response()->json([
                'success' => false,
                'message' => 'Campaign tidak ditemukan',
            ], 404);
        }

        // Campaign harus masih aktif untuk menerima donasi
        if ($campaign->status !== 'Aktif') {
            return response()->json([
                'success' => false,
                'message' => 'Campaign sudah tidak aktif, tidak bisa menerima donasi',
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'amount'     => 'required|numeric|min:10000', // Minimum donasi Rp 10.000
            'donor_name' => 'required|string|max:255',
            'message'    => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422);
        }

        $donation = Donation::create([
            'campaign_id' => $campaign->id,
            'user_id'     => auth()->id(),
            'amount'      => $request->amount,
            'donor_name'  => $request->donor_name,
            'message'     => $request->message,
        ]);

        return response()->json([
            'success'  => true,
            'message'  => 'Donasi berhasil dicatat',
            'donation' => $donation,
        ], 201);
    }

    /**
     * POST /api/campaigns/{id}/disbursements [JWT - Campaigner]
     * Mencatat pencairan dana dari campaign. Hanya pemilik campaign.
     */
    public function storeDisbursement(Request $request, string $id)
    {
        $campaign = Campaign::find($id);

        if (!$campaign) {
            return response()->json([
                'success' => false,
                'message' => 'Campaign tidak ditemukan',
            ], 404);
        }

        // Pastikan hanya pemilik campaign yang bisa mencairkan
        if ($campaign->user_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki akses untuk mencairkan dana campaign ini',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'amount'      => 'required|numeric|min:1000',
            'description' => 'required|string|max:500',
            'proof'       => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422);
        }

        $data = [
            'campaign_id' => $campaign->id,
            'user_id'     => auth()->id(),
            'amount'      => $request->amount,
            'description' => $request->description,
        ];

        // Upload bukti pencairan jika ada
        if ($request->hasFile('proof')) {
            $data['proof'] = $request->file('proof')->store('disbursements', 'public');
        }

        $disbursement = Disbursement::create($data);

        return response()->json([
            'success'      => true,
            'message'      => 'Pencairan dana berhasil dicatat',
            'disbursement' => $disbursement,
        ], 201);
    }

    /**
     * GET /api/campaigns/{id}/logs
     * Mengambil log transparansi: array donasi dan array pencairan (data mentah).
     * Frontend yang menghitung total dengan Array.prototype.reduce().
     */
    public function logs(string $id)
    {
        $campaign = Campaign::find($id);

        if (!$campaign) {
            return response()->json([
                'success' => false,
                'message' => 'Campaign tidak ditemukan',
            ], 404);
        }

        // Kirim data mentah — TIDAK ada SUM/COUNT di backend
        $donations = Donation::where('campaign_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        $disbursements = Disbursement::where('campaign_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'success'       => true,
            'campaign_id'   => (int) $id,
            'donations'     => $donations,
            'disbursements' => $disbursements,
        ]);
    }
}
