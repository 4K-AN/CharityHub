<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Disbursement;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed data dummy untuk demo CharityHub.
     * Membuat 2 Campaigner, 3 Donatur, 3 Campaign, dan beberapa transaksi.
     */
    public function run(): void
    {
        // =====================================================================
        // USERS — Campaigner
        // =====================================================================
        $campaigner1 = User::create([
            'name'     => 'Rina Wulandari',
            'email'    => 'rina@charityhub.test',
            'password' => 'password123',
            'role'     => 'Campaigner',
        ]);

        $campaigner2 = User::create([
            'name'     => 'Budi Santoso',
            'email'    => 'budi@charityhub.test',
            'password' => 'password123',
            'role'     => 'Campaigner',
        ]);

        // =====================================================================
        // USERS — Donatur
        // =====================================================================
        $donatur1 = User::create([
            'name'     => 'Andi Pratama',
            'email'    => 'andi@charityhub.test',
            'password' => 'password123',
            'role'     => 'Donatur',
        ]);

        $donatur2 = User::create([
            'name'     => 'Siti Nurhaliza',
            'email'    => 'siti@charityhub.test',
            'password' => 'password123',
            'role'     => 'Donatur',
        ]);

        $donatur3 = User::create([
            'name'     => 'Dewa Kusuma',
            'email'    => 'dewa@charityhub.test',
            'password' => 'password123',
            'role'     => 'Donatur',
        ]);

        // =====================================================================
        // CAMPAIGNS
        // =====================================================================
        $campaign1 = Campaign::create([
            'user_id'     => $campaigner1->id,
            'title'       => 'Bantu Renovasi Sekolah SDN 01 Harapan',
            'description' => 'Sekolah SDN 01 Harapan membutuhkan renovasi mendesak. Atap bocor dan dinding retak membahayakan keselamatan 200 siswa. Dana akan digunakan untuk perbaikan atap, dinding, dan fasilitas sanitasi.',
            'goal_amount' => 50000000,
            'status'      => 'Aktif',
            'deadline'    => now()->addMonths(3),
        ]);

        $campaign2 = Campaign::create([
            'user_id'     => $campaigner1->id,
            'title'       => 'Operasi Jantung untuk Adik Reza',
            'description' => 'Adik Reza (7 tahun) didiagnosis mengidap penyakit jantung bawaan dan membutuhkan operasi segera. Keluarga tidak mampu menanggung biaya operasi. Setiap rupiah yang Anda donasikan sangat berarti.',
            'goal_amount' => 150000000,
            'status'      => 'Aktif',
            'deadline'    => now()->addMonths(2),
        ]);

        $campaign3 = Campaign::create([
            'user_id'     => $campaigner2->id,
            'title'       => 'Pembangunan Mushola Desa Cikaret',
            'description' => 'Desa Cikaret belum memiliki tempat ibadah yang layak. Warga harus berjalan 3 km ke desa sebelah. Kami ingin membangun mushola sederhana untuk 150 kepala keluarga di desa ini.',
            'goal_amount' => 75000000,
            'status'      => 'Aktif',
            'deadline'    => now()->addMonths(6),
        ]);

        // =====================================================================
        // DONASI (Uang Masuk) — Data mentah, frontend yang menghitung total
        // =====================================================================

        // Donasi ke Campaign 1
        Donation::create([
            'campaign_id' => $campaign1->id,
            'user_id'     => $donatur1->id,
            'amount'      => 500000,
            'donor_name'  => 'Andi Pratama',
            'message'     => 'Semoga sekolahnya segera diperbaiki!',
        ]);

        Donation::create([
            'campaign_id' => $campaign1->id,
            'user_id'     => $donatur2->id,
            'amount'      => 1000000,
            'donor_name'  => 'Siti N.',
            'message'     => 'Untuk masa depan anak-anak Indonesia',
        ]);

        Donation::create([
            'campaign_id' => $campaign1->id,
            'user_id'     => $donatur3->id,
            'amount'      => 250000,
            'donor_name'  => 'Hamba Allah',
            'message'     => null,
        ]);

        // Donasi ke Campaign 2
        Donation::create([
            'campaign_id' => $campaign2->id,
            'user_id'     => $donatur1->id,
            'amount'      => 2000000,
            'donor_name'  => 'Andi P.',
            'message'     => 'Semoga lekas sembuh adik Reza',
        ]);

        Donation::create([
            'campaign_id' => $campaign2->id,
            'user_id'     => $donatur3->id,
            'amount'      => 5000000,
            'donor_name'  => 'Dewa Kusuma',
            'message'     => 'Tetap semangat!',
        ]);

        // Donasi ke Campaign 3
        Donation::create([
            'campaign_id' => $campaign3->id,
            'user_id'     => $donatur2->id,
            'amount'      => 1500000,
            'donor_name'  => 'Siti Nurhaliza',
            'message'     => 'Semoga mushola segera terwujud',
        ]);

        // =====================================================================
        // PENCAIRAN / DISBURSEMENTS (Uang Keluar)
        // =====================================================================

        // Pencairan dari Campaign 1
        Disbursement::create([
            'campaign_id' => $campaign1->id,
            'user_id'     => $campaigner1->id,
            'amount'      => 800000,
            'description' => 'Pembelian material atap (seng dan kayu)',
        ]);

        Disbursement::create([
            'campaign_id' => $campaign1->id,
            'user_id'     => $campaigner1->id,
            'amount'      => 300000,
            'description' => 'Biaya tukang hari pertama',
        ]);

        // Pencairan dari Campaign 2
        Disbursement::create([
            'campaign_id' => $campaign2->id,
            'user_id'     => $campaigner1->id,
            'amount'      => 1500000,
            'description' => 'DP biaya konsultasi dokter spesialis jantung',
        ]);
    }
}
