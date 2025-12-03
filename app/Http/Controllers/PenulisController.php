<?php

namespace App\Http\Controllers;

use App\Models\Penulis;

class PenulisController extends Controller
{
    // halaman daftar semua penulis
    public function index()
    {
        // ambil penulis + hitung jumlah resep mereka
        $penulis = Penulis::withCount('resep')->get();

        return view('penulis.index', compact('penulis'));
    }

    // halaman detail 1 penulis: tampilkan semua resep yang dia tulis
    public function show(Penulis $penulis)
    {
        $penulis->load(['resep.kategori']);

        return view('penulis.show', compact('penulis'));
    }
}
