<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Referensi ke db_auth.users — TANPA FK
            $table->string('title');
            $table->text('description');
            $table->decimal('goal_amount', 15, 2);
            $table->string('image')->nullable();
            $table->enum('status', ['Aktif', 'Selesai', 'Ditutup'])->default('Aktif');
            $table->date('deadline')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
