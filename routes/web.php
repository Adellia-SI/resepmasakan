<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\KategoriResepController;

// untuk sementara, halaman utama diarahkan ke daftar resep dulu
Route::get('/', function () {
    return redirect()->route('resep.index');
});

// daftar semua resep
Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');

// detail satu resep
Route::get('/resep/{resep}', [ResepController::class, 'show'])->name('resep.show');

//
Route::get('/kategori', [KategoriResepController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{kategoriResep}', [KategoriResepController::class, 'show'])->name('kategori.show');

use App\Http\Controllers\PenulisController;

Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');
Route::get('/penulis/{penulis}', [PenulisController::class, 'show'])->name('penulis.show');

