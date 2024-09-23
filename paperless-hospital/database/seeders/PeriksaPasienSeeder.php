<?php

namespace Database\Seeders;

use App\Models\Periksa_Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksaPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksa_Pasien::insert([
            [
                'no_rekam_medis' => '01',
                'kd_dokter' => 'D001',
                'ket_diagnosa' => 'gigi berlubang'
            ],
            [
                'no_rekam_medis' => '02',
                'kd_dokter' => 'D002',
                'ket_diagnosa' => 'paru - paru basah'
            ],
            [
                'no_rekam_medis' => '02',
                'kd_dokter' => 'D003',
                'ket_diagnosa' => 'saraf kejepit'
            ],
            [
                'no_rekam_medis' => '03',
                'kd_dokter' => 'D001',
                'ket_diagnosa' => 'gigi berlubang'
            ]
            ]);
    }
}
