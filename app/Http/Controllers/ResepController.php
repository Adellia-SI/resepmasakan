<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('q');

        $query = Resep::with(['kategori', 'penulis']);

        if (!empty($search)) {
            $query->where('judul', 'like', '%' . $search . '%');
        }

        $reseps = $query->latest()->paginate(9)->withQueryString();

        return view('resep.index', [
            'reseps' => $reseps,
            'search' => $search,
        ]);
    }

    // DETAIL RESEP
    public function show(Resep $resep)
    {
        $resep->load(['kategori', 'penulis']);

        return view('resep.show', compact('resep'));
    }
}
