<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tabel utama kampanye penggalangan dana.
     */
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Pemilik campaign (Campaigner)
            $table->string('title');
            $table->text('description');
            $table->decimal('goal_amount', 15, 2); // Target dana yang ingin dicapai
            $table->string('image')->nullable(); // Path gambar cover campaign
            $table->enum('status', ['Aktif', 'Selesai', 'Ditutup'])->default('Aktif');
            $table->date('deadline')->nullable(); // Batas waktu campaign
            $table->timestamps();
            $table->softDeletes(); // Wajib: Soft Deletes untuk campaigns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
