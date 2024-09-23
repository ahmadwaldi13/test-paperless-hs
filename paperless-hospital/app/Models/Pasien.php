<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasien extends Model
{
    protected $primaryKey = "no_rekam_medis";
    protected $keyType = "string";
    protected $table = "pasien";
    public $incrementing = false;
    public $timestamps = false;

    public function registrasiPasien(): HasMany {
        return $this->hasMany(Registrasi_Pasien::class, "no_rekam_medis", "no_rekam_medis");
    }

    public function periksaPasien(): HasMany {
        return $this->hasMany(Periksa_Pasien::class, "no_rekam_medis", "no_rekam_medis");
    }

}
