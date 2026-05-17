<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CampaignController extends Controller
{
    /**
     * GET /api/campaigns
     * Mengambil semua campaign yang aktif (publik, tanpa auth).
     * Backend HANYA mengirim data mentah — tidak ada SUM/COUNT.
     */
    public function index()
    {
        // Eager load donations & disbursements agar frontend bisa menghitung
        $campaigns = Campaign::with(['user:id,name', 'donations', 'disbursements'])
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'success'   => true,
            'campaigns' => $campaigns,
        ]);
    }

    /**
     * GET /api/campaigns/search?q=...
     * Pencarian campaign berdasarkan judul atau deskripsi.
     */
    public function search(Request $request)
    {
        $query = $request->query('q', '');

        $campaigns = Campaign::with(['user:id,name', 'donations', 'disbursements'])
            ->where('title', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'success'   => true,
            'campaigns' => $campaigns,
        ]);
    }

    /**
     * POST /api/campaigns [JWT - Campaigner]
     * Membuat campaign baru. Hanya bisa dilakukan oleh Campaigner.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'goal_amount' => 'required|numeric|min:100000', // Minimum target Rp 100.000
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deadline'    => 'nullable|date|after:today',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422);
        }

        $data = $request->only('title', 'description', 'goal_amount', 'deadline');
        $data['user_id'] = auth()->id();

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('campaigns', 'public');
        }

        $campaign = Campaign::create($data);

        return response()->json([
            'success'  => true,
            'message'  => 'Campaign berhasil dibuat',
            'campaign' => $campaign->load('user:id,name'),
        ], 201);
    }

    /**
     * GET /api/campaigns/{id}
     * Mengambil detail satu campaign beserta data mentah donasi & pencairan.
     */
    public function show(string $id)
    {
        $campaign = Campaign::with(['user:id,name', 'donations', 'disbursements'])
            ->find($id);

        if (!$campaign) {
            return response()->json([
                'success' => false,
                'message' => 'Campaign tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success'  => true,
            'campaign' => $campaign,
        ]);
    }

    /**
     * PUT /api/campaigns/{id} [JWT - Campaigner]
     * Update campaign (termasuk mengubah status menjadi Selesai/Ditutup).
     * Hanya pemilik campaign yang bisa mengubah.
     */
    public function update(Request $request, string $id)
    {
        $campaign = Campaign::find($id);

        if (!$campaign) {
            return response()->json([
                'success' => false,
                'message' => 'Campaign tidak ditemukan',
            ], 404);
        }

        // Pastikan hanya pemilik campaign yang bisa update
        if ($campaign->user_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki akses untuk mengubah campaign ini',
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'title'       => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'goal_amount' => 'sometimes|numeric|min:100000',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'      => 'sometimes|in:Aktif,Selesai,Ditutup',
            'deadline'    => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422);
        }

        $data = $request->only('title', 'description', 'goal_amount', 'status', 'deadline');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('campaigns', 'public');
        }

        $campaign->update($data);

        return response()->json([
            'success'  => true,
            'message'  => 'Campaign berhasil diperbarui',
            'campaign' => $campaign->fresh()->load('user:id,name'),
        ]);
    }
}
