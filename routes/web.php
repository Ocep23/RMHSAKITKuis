<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PasienController::class, 'index'])->name('index');
Route::get('/daftar', [PasienController::class, 'daftar'])->name('daftar');
Route::post('/pasiens-store', [PasienController::class, 'storepasien'])->name('storepasien');
Route::get('/pasiens', [PasienController::class, 'tampilpasien'])->name('tampilpasien');
Route::get('/tambahpasien', [PasienController::class, 'tambah'])->name('tambah');
Route::delete('/pasiens/{nopendaftaran}', [PasienController::class, 'destroy'])->name('delete');