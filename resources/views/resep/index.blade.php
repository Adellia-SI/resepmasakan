@extends('layouts.app')

@section('title', 'Daftar Resep')

@section('content')
    {{-- HEADER + SEARCH --}}
    <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <h1 class="text-2xl font-bold text-pink-700">
            Daftar Resep
        </h1>

        <form action="{{ route('resep.index') }}" method="GET" class="flex gap-2">
            <input
                type="text"
                name="q"
                placeholder="Cari resep (misal: Sop, Pie, Cookies)..."
                value="{{ request('q') }}"
                class="px-4 py-2 rounded-full border border-pink-300 bg-white text-sm
                       focus:outline-none focus:ring-2 focus:ring-pink-400 w-64"
            >
            <button
                type="submit"
                class="px-4 py-2 rounded-full text-sm font-semibold bg-pink-500 text-white
                       hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-300">
                Cari
            </button>
        </form>
    </div>

    {{-- GRID RESEP --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($reseps as $resep)
            <a href="{{ route('resep.show', $resep) }}"
               class="bg-white rounded-xl shadow-md hover:shadow-lg transition overflow-hidden flex flex-col">
                @if($resep->foto)
                    <img src="{{ asset('storage/' . $resep->foto) }}"
                         alt="{{ $resep->judul }}"
                         class="w-full h-48 object-cover">
                @endif

                <div class="p-4 flex-1 flex flex-col">
                    <h2 class="font-semibold text-lg mb-1 text-pink-700">
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
            <p class="text-sm text-gray-500">
                Tidak ada resep yang cocok dengan pencarian
                @if(request('q'))
                    <span class="font-semibold text-pink-600">"{{ request('q') }}"</span>.
                @endif
            </p>
        @endforelse
    </div>

    {{-- PAGINATION --}}
    <div class="mt-6">
        {{ $reseps->links() }}
    </div>
@endsection
