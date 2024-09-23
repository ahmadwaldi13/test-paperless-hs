<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poli extends Model
{
    protected $primaryKey = "id_poli";
    protected $keyType = "int";
    protected $table = "poli";
    public $incrementing = true;
    public $timestamps = false;

    public function registrasiPasien(): HasMany {
        return $this->hasMany(Registrasi_Pasien::class, "id_poli", "id_polis");
    }

    public function dokter(): HasMany {
        return $this->hasMany(Dokter::class, "id_poli", "id_poli");
    }
}
