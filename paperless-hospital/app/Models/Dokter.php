<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dokter extends Model
{
    protected $primaryKey = "kd_dokter";
    protected $keyType = "string";
    protected $table = "dokter";
    public $incrementing = false;
    public $timestamps = true;

    public function poli(): BelongsTo {
        return $this->belongsTo(Poli::class, "id_poli", "id_poli");
    }

    public function periksaPasien(): HasMany {
        return $this->hasMany(Periksa_Pasien::class, "kd_dokter", "kd_dokter");
    }

}
