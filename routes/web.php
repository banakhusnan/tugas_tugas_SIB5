<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\PagenotController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamualaikum selamat belajar laravel";
});

Route::get('/staff/{nama}/{divisi}', function ($nama, $divisi) {
    return "Nama Pegawai : $nama <br>Departemen : $divisi";
});

Route::get('/kondisi', function () {
    return view('kondisi');
});

Route::get('/daftarnilai', function () {
    return view('coba.daftar');
});

Route::get('/notfound', [PagenotController::class, 'index']);

Route::get('/datamahasiswa', [LihatNilaiController::class, 'dataMahasiswa']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('kartu', KartuController::class);

Route::get('/jenis_produk', [JenisProdukController::class, 'index']);
