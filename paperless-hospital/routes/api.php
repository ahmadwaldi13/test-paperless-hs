<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/pasien', [\App\Http\Controllers\PasienController::class, 'getDataPasien']);
Route::get('/pasien/filter', [\App\Http\Controllers\PasienController::class, 'getFilteredPasien']);
Route::get('/dokter/filter', [\App\Http\Controllers\PasienController::class, 'getFilteredDokter']);
Route::get('/tgl-registrasi/filter', [\App\Http\Controllers\PasienController::class, 'getFilteredTglRegisrasi']);

