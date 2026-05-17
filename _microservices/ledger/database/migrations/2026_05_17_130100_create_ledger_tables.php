<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id'); // Referensi ke db_campaign — TANPA FK
            $table->unsignedBigInteger('user_id');     // Referensi ke db_auth — TANPA FK
            $table->decimal('amount', 15, 2);
            $table->string('donor_name');
            $table->text('message')->nullable();
            $table->timestamps();
        });

        Schema::create('disbursements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id'); // Referensi ke db_campaign — TANPA FK
            $table->unsignedBigInteger('user_id');     // Referensi ke db_auth — TANPA FK
            $table->decimal('amount', 15, 2);
            $table->string('description');
            $table->string('proof')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disbursements');
        Schema::dropIfExists('donations');
    }
};
