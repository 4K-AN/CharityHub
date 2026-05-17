<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Disbursement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class LedgerController extends Controller
{
    /**
     * POST /api/campaigns/{id}/donations [JWT - Donatur]
     * Mencatat donasi baru ke campaign. Minimal donasi Rp 10.000.
     */
    public function storeDonation(Request $request, string $id)
    {
        // Gunakan model Campaign lokal agar tidak error (fallback monolith)
        $campaignData = \App\Models\Campaign::find($id);

        if (!$campaignData) {
            return response()->json([
                'error' => [
                    'message' => 'Campaign tidak ditemukan',
                    'code'    => 404
                ]
            ], 404);
        }

        // Campaign harus masih aktif untuk menerima donasi
        if ($campaignData['status'] !== 'Aktif') {
            return response()->json([
                'error' => [
                    'message' => 'Campaign sudah tidak aktif, tidak bisa menerima donasi',
                    'code'    => 400
                ]
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'amount'     => 'required|numeric|min:10000', // Minimum donasi Rp 10.000
            'donor_name' => 'required|string|max:255',
            'message'    => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'message' => $validator->errors()->first(),
                    'code'    => 422
                ]
            ], 422);
        }

        $userId = JWTAuth::parseToken()->getPayload()->get('sub') ?? auth()->id();

        $donation = Donation::create([
            'campaign_id' => $campaignData['id'],
            'user_id'     => $userId,
            'amount'      => $request->amount,
            'donor_name'  => $request->donor_name,
            'message'     => $request->message,
        ]);

        return response()->json([
            'message' => 'Donasi berhasil dicatat',
            'data'    => [
                'donation' => $donation,
            ]
        ], 201);
    }

    /**
     * POST /api/campaigns/{id}/disbursements [JWT - Campaigner]
     * Mencatat pencairan dana dari campaign. Hanya pemilik campaign.
     */
    public function storeDisbursement(Request $request, string $id)
    {
        // Gunakan model Campaign lokal agar tidak error (fallback monolith)
        $campaignData = \App\Models\Campaign::find($id);

        if (!$campaignData) {
            return response()->json([
                'error' => [
                    'message' => 'Campaign tidak ditemukan',
                    'code'    => 404
                ]
            ], 404);
        }
        $userId = JWTAuth::parseToken()->getPayload()->get('sub') ?? auth()->id();

        // Pastikan hanya pemilik campaign yang bisa mencairkan
        if ($campaignData['user_id'] != $userId) {
            return response()->json([
                'error' => [
                    'message' => 'Anda tidak memiliki akses untuk mencairkan dana campaign ini',
                    'code'    => 403
                ]
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'amount'      => 'required|numeric|min:1000',
            'description' => 'required|string|max:500',
            'proof'       => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'message' => $validator->errors()->first(),
                    'code'    => 422
                ]
            ], 422);
        }

        $data = [
            'campaign_id' => $campaignData['id'],
            'user_id'     => $userId,
            'amount'      => $request->amount,
            'description' => $request->description,
        ];

        // Upload bukti pencairan jika ada
        if ($request->hasFile('proof')) {
            $data['proof'] = $request->file('proof')->store('disbursements', 'public');
        }

        $disbursement = Disbursement::create($data);

        return response()->json([
            'message' => 'Pencairan dana berhasil dicatat',
            'data'    => [
                'disbursement' => $disbursement,
            ]
        ], 201);
    }

    /**
     * GET /api/campaigns/{id}/logs
     * Mengambil log transparansi: array donasi dan array pencairan (data mentah).
     * Frontend yang menghitung total dengan Array.prototype.reduce().
     */
    public function logs(string $id)
    {
        // Gunakan model Campaign lokal agar tidak error (fallback monolith)
        $campaign = \App\Models\Campaign::find($id);

        if (!$campaign) {
            return response()->json([
                'error' => [
                    'message' => 'Campaign tidak ditemukan',
                    'code'    => 404
                ]
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
            'message' => 'Log transparansi berhasil diambil',
            'data'    => [
                'campaign_id'   => (int) $id,
                'donations'     => $donations,
                'disbursements' => $disbursements,
            ]
        ]);
    }
}
