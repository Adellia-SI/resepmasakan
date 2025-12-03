@extends('layouts.app')

@section('title', 'Kategori: ' . $kategori->nama_kategori)

@section('content')
    <a href="{{ route('kategori.index') }}" class="text-sm text-blue-600">
        &larr; Kembali ke semua kategori
    </a>

    <h1 class="text-2xl font-bold mt-3 mb-4">
        Kategori: {{ $kategori->nama_kategori }}
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse ($kategori->resep as $resep)
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
                    <h2 class="font-semibold text-lg mb-1">{{ $resep->judul }}</h2>
                    <p class="text-xs text-gray-700 mt-auto">
                        Oleh {{ $resep->penulis->nama_penulis ?? '-' }}
                    </p>
                </div>
            </a>
        @empty
            <p>Belum ada resep di kategori ini.</p>
        @endforelse
    </div>
@endsection
