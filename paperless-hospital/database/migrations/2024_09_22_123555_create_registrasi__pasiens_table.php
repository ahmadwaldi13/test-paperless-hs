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
        Schema::create('registrasi_pasien', function (Blueprint $table) {
            $table->string('no_rekam_medis', 5)->nullable(false);
            $table->unsignedBigInteger('id_poli')->nullable(false);
            $table->string('no_registrasi', 3)->nullable(false);
            $table->date('tgl_registrasi')->nullable(true);
        
            $table->primary(['no_rekam_medis', 'id_poli']);
        
            $table->foreign('no_rekam_medis')->on('pasien')->references('no_rekam_medis');
            $table->foreign('id_poli')->on('poli')->references('id_poli');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi__pasien');
    }
};
