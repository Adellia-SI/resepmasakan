<?php

namespace App\Http\Controllers;

use App\Models\KategoriResep;

class KategoriResepController extends Controller
{
    // Halaman daftar semua kategori
    public function index()
    {
        // ambil semua kategori + hitung jumlah resep di tiap kategori
        $kategori = KategoriResep::withCount('resep')->get();

        return view('kategori.index', compact('kategori'));
    }

    // Halaman detail 1 kategori: tampilkan resep di kategori ini
    public function show(KategoriResep $kategoriResep)
    {
        // load resep + penulis dalam kategori ini
        $kategoriResep->load(['resep.penulis']);

        return view('kategori.show', [
            'kategori' => $kategoriResep,
        ]);
    }
}
