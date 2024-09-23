<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Registrasi_Pasien;

class PasienController extends Controller
{
    public function getDataPasien(): JsonResponse {
    
        $data = Pasien::with(['registrasiPasien.poli', 'periksaPasien.dokter.poli'])->get();

    return response()->json(data: $data);
    }

    public function getFilteredDokter(Request $request)
    {
        // Ambil parameter dari request
        $namaDokter = $request->input('nama_dokter');

        // Mulai query
        $query = Dokter::with([
            'periksaPasien.pasien', 'poli'
        ])->where('nm_dokter', 'like', '%' . $namaDokter . '%');


        $data = $query->get();

        // Cek apakah data ada
        if ($data->isEmpty()) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data );
    }

    public function getFilteredPasien(Request $request)
    {
        // Ambil parameter dari request
        $namaPasien = $request->input('nama_pasien');

        // Mulai query
        $query = Pasien::with(['registrasiPasien.poli', 'periksaPasien.dokter.poli'])->where('nama_pasien', 'like', '%' . $namaPasien . '%');


        $data = $query->get();

        // Cek apakah data ada
        if ($data->isEmpty()) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }

    public function getFilteredTglRegisrasi(Request $request)
    {
        // Ambil parameter dari request
        $tglRegistrasi = $request->input('tgl_registrasi');

        // Mulai query
        $query = Registrasi_Pasien::with(['pasien.periksaPasien.dokter', 'poli'])->whereDate('tgl_registrasi', $tglRegistrasi);


        $data = $query->get();

        // Cek apakah data ada
        if ($data->isEmpty()) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }
}
