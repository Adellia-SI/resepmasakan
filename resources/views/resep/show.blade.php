@extends('layouts.app')

@section('title', $resep->judul . ' - Resep')

@section('content')
    <a href="{{ route('resep.index') }}" class="text-sm text-pink-500 hover:underline">
        ← Kembali ke daftar resep
    </a>

    <div class="mt-4 bg-white rounded-xl shadow-md overflow-hidden">
        @if($resep->foto)
            <img src="{{ asset('storage/' . $resep->foto) }}"
                 alt="{{ $resep->judul }}"
                 class="w-full max-h-80 object-cover">
        @endif

        <div class="p-6">
            <h1 class="text-3xl font-bold text-pink-700 mb-2">
                {{ $resep->judul }}
            </h1>

            <p class="text-sm text-gray-500 mb-4">
                Kategori: <span class="font-semibold">{{ $resep->kategori->nama_kategori ?? '-' }}</span> ·
                Oleh <span class="font-semibold">{{ $resep->penulis->nama_penulis ?? '-' }}</span>
            </p>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-xl font-semibold mb-2 text-pink-700">Bahan-bahan</h2>
                    <div class="prose prose-sm max-w-none">
                        {!! $resep->bahan !!}
                    </div>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-2 text-pink-700">Langkah-langkah Memasak</h2>
                    <div class="prose prose-sm max-w-none">
                        {!! $resep->langkah !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
