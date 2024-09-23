<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokter;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::insert([
            [
                'kd_dokter' => 'D001',
                'nm_dokter' => 'agus',
                'id_poli' => 1,
                'tanggal' => now()
            ],
            [
                'kd_dokter' => 'D002',
                'nm_dokter' => 'bayu',
                'id_poli' => 2,
                'tanggal' => now()
            ],
            [
                'kd_dokter' => 'D003',
                'nm_dokter' => 'hendra',
                'id_poli' => 3,
                'tanggal' => now()
            ]
            ]);
    }
}
