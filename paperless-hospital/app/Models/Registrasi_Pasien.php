<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Registrasi_Pasien extends Model
{
    protected $primaryKey = ["no_rekam_medis", "id_poli"];
    protected $keyType = ["string", "int"];
    protected $table = "registrasi_pasien";
    public $incrementing = false;
    public $timestamps = true;

    public function pasien(): BelongsTo {
        return $this->belongsTo(Pasien::class, "no_rekam_medis", "no_rekam_medis");
    }

    public function poli(): BelongsTo {
        return $this->belongsTo(Poli::class, "id_poli", "id_poli");
    }
}
