<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statistik_desas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('total_penduduk');
            $table->unsignedBigInteger('total_kk');
            $table->unsignedBigInteger('total_pengajuan');
            $table->unsignedBigInteger('total_pengaduan');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistik_desas');
    }
};
