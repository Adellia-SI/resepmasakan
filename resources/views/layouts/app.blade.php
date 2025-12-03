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

        body {
            background-image: maskotnew.jpg;
            background-size: contain;
            background-repeat: repeat;
            background-position: top left;
        }

        button, a {
            transition: 0.25s ease;
        }

        a.active, a:hover {
            box-shadow: 0px 0px 12px rgba(255, 105, 180, 0.4);
            transform: translateY(-2px);
        }

    </style>

</head>
<body class="bg-pink-50">
    {{-- HEADER / NAMA TOKO --}}
    <header class="bg-white shadow-sm border-b border-pink-200 mb-6 py-6">
    <div class="max-w-6xl mx-auto px-4 text-center">

        {{-- WRAPPER LOGO + TITLE --}}
        <div class="flex items-center gap-4 mb-3 justify-center w-full">
            {{-- MASCOT IMAGE --}}
            <img src="{{ asset('images/maskotnew.jpg') }}"
                 alt="Chef Girl Mascot"
                 class="w-20 drop-shadow-lg rounded-full object-cover">

            {{-- TITLE --}}
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide text-pink-600">
                Resep Masakan
            </h1>
        </div>

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

<footer class="text-center py-6 text-pink-600 text-sm opacity-70">
    ✨ Menu masakan dibuat dengan penuh cinta💕 untuk keluarga tercinta✨
</footer>

</body>
</html>
