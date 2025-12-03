<?php

namespace App\Http\Controllers;

use App\Models\Resep;

class ResepController extends Controller
{
    // halaman daftar resep
    public function index()
    {
        // ambil resep + relasi kategori & penulis
        $reseps = Resep::with(['kategori', 'penulis'])
            ->latest()
            ->paginate(9); // 9 per halaman

        return view('resep.index', compact('reseps'));
    }

    // halaman detail 1 resep
    public function show(Resep $resep)
    {
        $resep->load(['kategori', 'penulis']);

        return view('resep.show', compact('resep'));
    }
}
