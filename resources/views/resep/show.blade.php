@extends('layouts.app')

@section('title', $resep->judul . ' - Resep')

@section('content')
    <a href="{{ route('resep.index') }}" class="text-sm text-blue-600">
        &larr; Kembali ke daftar resep
    </a>

    <div class="bg-white rounded-lg shadow mt-4 overflow-hidden">
        @if($resep->foto)
            <img
                src="{{ asset('storage/' . $resep->foto) }}"
                alt="{{ $resep->judul }}"
                class="w-full max-h-80 object-cover"
            >
        @endif

        <div class="p-6">
            <h1 class="text-3xl font-bold mb-2 text-pink-700">{{ $resep->judul }}</h1>

            <p class="text-sm text-pink-600 mb-4">
                Kategori: {{ $resep->kategori->nama_kategori ?? '-' }} ·
                Penulis: {{ $resep->penulis->nama_penulis ?? '-' }}
            </p>

            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2 text-pink-700">Bahan-bahan</h2>
                <div class="prose max-w-none">
                    {!! $resep->bahan !!}
                </div>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-2 text-pink-700">Langkah-langkah Memasak</h2>
                <div class="prose max-w-none">
                    {!! $resep->langkah !!}
                </div>
            </div>
        </div>
    </div>
@endsection
