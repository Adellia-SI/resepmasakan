@extends('layouts.app')

@section('title', 'Kategori Resep')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Kategori Resep</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @forelse ($kategori as $item)
            <a href="{{ route('kategori.show', $item) }}"
               class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition">
                <h2 class="font-semibold text-lg mb-1">{{ $item->nama_kategori }}</h2>
                <p class="text-sm text-gray-700">
                    {{ $item->resep_count }} resep
                </p>
            </a>
        @empty
            <p>Belum ada kategori.</p>
        @endforelse
    </div>
@endsection
