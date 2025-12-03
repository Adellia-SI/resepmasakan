<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'ResepMasak')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind via CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <style>
        body {
            color: #7b1b6e; /* tone pink keunguan */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1, h2, h3, h4 {
            color: #cc0f7a; /* pink judul */
        }

        a:hover {
            opacity: 0.85;
        }

        a {
            transition: 0.2s;
        }

    </style>

</head>
<body class="bg-pink-50">
    {{-- HEADER / NAMA TOKO --}}
    <header class="bg-white shadow-sm border-b border-pink-200 mb-6">
    <div class="max-w-6xl mx-auto px-4 py-6 text-center">

        {{-- JUDUL --}}
        <h1 class="text-4xl font-extrabold tracking-wide text-pink-600 mb-4">
            Resep Masakan
        </h1>

        {{-- NAVIGATION BUTTONS --}}
        <div class="flex justify-center gap-3 flex-wrap">

            <a href="{{ route('resep.index') }}"
               class="px-4 py-2 rounded-full text-sm font-semibold border border-pink-300
                      {{ request()->routeIs('resep.*') ? 'bg-pink-500 text-white' : 'bg-pink-100 text-pink-700 hover:bg-pink-200' }}">
                Resep
            </a>

            <a href="{{ route('kategori.index') }}"
               class="px-4 py-2 rounded-full text-sm font-semibold border border-pink-300
                      {{ request()->routeIs('kategori.*') ? 'bg-pink-500 text-white' : 'bg-pink-100 text-pink-700 hover:bg-pink-200' }}">
                Kategori
            </a>

            <a href="{{ route('penulis.index') }}"
               class="px-4 py-2 rounded-full text-sm font-semibold border border-pink-300
                      {{ request()->routeIs('penulis.*') ? 'bg-pink-500 text-white' : 'bg-pink-100 text-pink-700 hover:bg-pink-200' }}">
                Penulis
            </a>

        </div>
    </div>
</header>

    {{-- KONTEN HALAMAN --}}
    <main class="max-w-6xl mx-auto px-4 pb-10">
        @yield('content')
    </main>
</body>
</html>
