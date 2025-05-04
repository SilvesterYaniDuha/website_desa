<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;

// Route Frontend
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/profil', [HalamanController::class, 'profil'])->name('profil');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// Route Admin (jika diperlukan)
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Tambahkan route admin di sini
});

