@extends('layouts.app')

@section('title', 'Daftar Penulis')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Penulis</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @forelse ($penulis as $item)
            <a href="{{ route('penulis.show', $item) }}"
               class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition">
                <h2 class="font-semibold text-lg mb-1">{{ $item->nama_penulis }}</h2>
                <p class="text-sm text-gray-500 mb-1">{{ $item->email }}</p>
                <p class="text-xs text-gray-400">{{ $item->resep_count }} resep</p>
            </a>
        @empty
            <p>Belum ada penulis.</p>
        @endforelse
    </div>
@endsection
