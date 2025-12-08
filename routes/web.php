<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\KategoriResepController;
use App\Http\Controllers\PenulisController;


Route::get('/', function () {
    return redirect()->route('resep.index');
});

//Daftar semua resep
Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');
//Detail satu resep
Route::get('/resep/{resep}', [ResepController::class, 'show'])->name('resep.show');

//Daftar semua kategori
Route::get('/kategori', [KategoriResepController::class, 'index'])->name('kategori.index');
//Daftar satu kategori
Route::get('/kategori/{kategoriResep}', [KategoriResepController::class, 'show'])->name('kategori.show');

//Daftar semua Penulis
Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');
//Daftar Satu penulis
Route::get('/penulis/{penulis}', [PenulisController::class, 'show'])->name('penulis.show');


Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');


Route::get('/resep', [ResepController::class, 'index'])->name('resep.index');
Route::get('/resep/{resep}', [ResepController::class, 'show'])->name('resep.show');
