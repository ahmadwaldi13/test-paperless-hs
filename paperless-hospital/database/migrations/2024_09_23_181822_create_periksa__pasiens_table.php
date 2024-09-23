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
        Schema::create('periksa_pasien', function (Blueprint $table) {
            $table->string('no_rekam_medis', 5)->nullable(false);
            $table->string('kd_dokter', 4)->nullable(false);
            $table->string('ket_diagnosa', 100)->nullable(false);
        
            $table->foreign('no_rekam_medis')->on('pasien')->references('no_rekam_medis');
            $table->foreign('kd_dokter')->on('dokter')->references('kd_dokter');
        
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksa_pasiens');
    }
};
