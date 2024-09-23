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
        Schema::create('dokter', function (Blueprint $table) {
            $table->string('kd_dokter', 4)->nullable(false)->primary();
            $table->string('nm_dokter', 255)->nullable(false);
            $table->unsignedBigInteger('id_poli')->nullable(false);
            $table->date('tanggal')->nullable(true);

            $table->foreign('id_poli')->on('poli')->references('id_poli');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};



