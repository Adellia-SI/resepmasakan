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
            color: #7b1b6e; /* tone pink keunguan */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffeef7; /* pink lembut background */
        }

        button, a {
            transition: 0.25s ease;
        }

        a.active, a:hover {
            box-shadow: 0px 0px 12px rgba(255, 105, 180, 0.4);
            transform: translateY(-2px);
        }

        /* ==================== SAKURA ANIMASI ==================== */
        .sakura-container {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 5;
        }

        /* bentuk kelopak */
        .sakura {
            position: absolute;
            top: -10vh;
            width: 18px;
            height: 18px;
            background: #fa9fc5;
            border-radius: 70% 15% 70% 15%;
            box-shadow: 0 0 8px rgba(255, 180, 211, 0.9);
            opacity: 0.9;
            animation: sakura-fall linear infinite;
        }

        /* variasi posisi & durasi */
        .sakura-1 { left: 8%;  animation-duration: 9s; }
        .sakura-2 { left: 25%; animation-duration: 11s; }
        .sakura-3 { left: 45%; animation-duration: 13s; }
        .sakura-4 { left: 65%; animation-duration: 10s; }
        .sakura-5 { left: 80%; animation-duration: 14s; }
        .sakura-6 { left: 92%; animation-duration: 12s; }
        .sakura-7 { left: 10%;  animation-duration: 18s; }
        .sakura-8 { left: 30%; animation-duration: 23s; }
        .sakura-9 { left: 40%; animation-duration: 7s; }
        .sakura-10 { left: 50%; animation-duration: 10s; }
        .sakura-11 { left: 60%; animation-duration: 17; }
        .sakura-12 { left: 70%; animation-duration: 15s; }
        .sakura-13 { left: 15%;  animation-duration: 10s; }
        .sakura-14 { left: 25%; animation-duration: 8s; }
        .sakura-15 { left: 35%; animation-duration: 14s; }
        .sakura-16 { left: 45%; animation-duration: 9s; }
        .sakura-17 { left: 50%; animation-duration: 16s; }
        .sakura-18 { left: 62%; animation-duration: 19s; }

        @keyframes sakura-fall {
            0% {
                transform: translate3d(0, -10vh, 0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            50% {
                transform: translate3d(25px, 50vh, 0) rotate(140deg);
            }
            100% {
                transform: translate3d(-15px, 110vh, 0) rotate(260deg);
                opacity: 0;
            }
        }

    </style>

</head>
<body class="bg-pink-50">
    {{-- 🌸 Bunga Sakura (diletakkan di sini) --}}
    <div class="sakura-container">
        <span class="sakura sakura-1"></span>
        <span class="sakura sakura-2"></span>
        <span class="sakura sakura-3"></span>
        <span class="sakura sakura-4"></span>
        <span class="sakura sakura-5"></span>
        <span class="sakura sakura-6"></span>
        <span class="sakura sakura-7"></span>
        <span class="sakura sakura-8"></span>
        <span class="sakura sakura-9"></span>
        <span class="sakura sakura-10"></span>
        <span class="sakura sakura-11"></span>
        <span class="sakura sakura-12"></span>
        <span class="sakura sakura-13"></span>
        <span class="sakura sakura-14"></span>
        <span class="sakura sakura-15"></span>
        <span class="sakura sakura-16"></span>
        <span class="sakura sakura-17"></span>
        <span class="sakura sakura-18"></span>

    </div>

    {{-- HEADER / NAMA TOKO --}}
<header class="relative z-10 bg-white shadow-sm border-b border-pink-200 mb-6 py-6">
    <div class="max-w-6xl mx-auto px-4 text-center">

        {{-- WRAPPER LOGO + TITLE --}}
        <div class="flex items-center justify-center gap-4 mb-3">
            {{-- MASCOT IMAGE --}}
            <img src="{{ asset('images/maskotnew.jpg') }}"
                 alt="Chef Girl Mascot"
                 class="w-20 h-20 rounded-full object-cover shadow-md">

            {{-- TITLE --}}
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide text-pink-600">
                Resep Masakan
            </h1>
        </div>

        {{-- NAVIGATION BUTTONS --}}
        <div class="flex justify-center gap-3 flex-wrap mt-2">

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
<main class="relative z-10 max-w-6xl mx-auto px-4 pb-10">
    @yield('content')
</main>

<footer class="text-center py-6 text-pink-600 text-sm opacity-70">
    ✨ Menu masakan dibuat dengan penuh cinta💕 untuk keluarga tercinta✨
</footer>

</body>
</html>
