@extends('layouts.app')

@section('title', 'Daftar Resep')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-pink-700">Daftar Resep</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse ($reseps as $resep)
            <a href="{{ route('resep.show', $resep) }}"
               class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                @if($resep->foto)
                    <img
                        src="{{ asset('storage/' . $resep->foto) }}"
                        alt="{{ $resep->judul }}"
                        class="w-full h-40 object-cover"
                    >
                @else
                    <div class="w-full h-40 bg-gray-300 flex items-center justify-center text-gray-600 text-sm">
                        Tidak ada foto
                    </div>
                @endif

                <div class="p-4 flex-1 flex flex-col">
                    <h2 class="font-semibold text-lg mb-1">
                        {{ $resep->judul }}
                    </h2>

                    <p class="text-sm text-gray-500 mb-1">
                        Kategori: {{ $resep->kategori->nama_kategori ?? '-' }}
                    </p>

                    <p class="text-xs text-gray-400 mt-auto">
                        Oleh {{ $resep->penulis->nama_penulis ?? '-' }}
                    </p>
                </div>
            </a>
        @empty
            <p>Belum ada resep.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $reseps->links() }}
    </div>
@endsection
