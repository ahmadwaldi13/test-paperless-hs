<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Poli::insert([
            [
                'nm_poli' => 'poli gigi',
            ],
            [
                'nm_poli' => 'poli penyakit dalam',
            ],
            [
                'nm_poli' => 'poli saraf',
            ]
            ]);
    }
}
