@extends('layouts.app')

@section('title', 'Penulis: ' . $penulis->nama_penulis)

@section('content')
    <a href="{{ route('penulis.index') }}" class="text-sm text-pink-600">
        &larr; Kembali ke daftar penulis
    </a>

    <h1 class="text-2xl font-bold mt-3 mb-1">{{ $penulis->nama_penulis }}</h1>
    <p class="text-sm text-gray-600 mb-4">{{ $penulis->email }}</p>

    <h2 class="text-xl font-semibold mb-3">Resep oleh {{ $penulis->nama_penulis }}</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse ($penulis->resep as $resep)
            <a href="{{ route('resep.show', $resep) }}"
               class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                @if($resep->foto)
                    <img
                        src="{{ asset('storage/' . $resep->foto) }}"
                        alt="{{ $resep->judul }}"
                        class="w-full h-40 object-cover"
                    >
                @endif

                <div class="p-4 flex-1 flex flex-col">
                    <h3 class="font-semibold text-lg mb-1">
                        {{ $resep->judul }}
                    </h3>
                    <p class="text-xs text-gray-500 mt-auto">
                        Kategori: {{ $resep->kategori->nama_kategori ?? '-' }}
                    </p>
                </div>
            </a>
        @empty
            <p>Penulis ini belum punya resep.</p>
        @endforelse
    </div>
@endsection
