<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::insert([
            [
                'no_rekam_medis' => '01',
                'nama_pasien' => 'iwan',
                'NIK' => '243545486'
            ],
            [
                'no_rekam_medis' => '02',
                'nama_pasien' => 'joko',
                'NIK' => '243343575'
            ],
            [
                'no_rekam_medis' => '03',
                'nama_pasien' => 'siti',
                'NIK' => '343985372'
            ]
            ]);
    }
}
