<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Periksa_Pasien extends Model
{
    protected $primaryKey = ["no_rekam_medis", "kd_dokter"];
    protected $keyType = ["string", "string"];
    protected $table = "periksa_pasien";
    public $incrementing = false;
    public $timestamps = false;

    public function pasien(): BelongsTo {
        return $this->belongsTo(Pasien::class, "no_rekam_medis", "no_rekam_medis");
    }

    public function dokter(): BelongsTo {
        return $this->belongsTo(Dokter::class, "kd_dokter", "kd_dokter");
    }
}
