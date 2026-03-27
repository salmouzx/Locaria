<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Locaria</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar">
    <div class="logo">Locaria</div>
    <ul>
        <li>
            <a href="{{ route('home') }}" 
            class="{{ request()->is('/') ? 'active' : '' }}">
            Beranda
            </a>
        </li>

        <li>
            <a href="{{ route('tongkrongan') }}" 
            class="{{ request()->is('tongkrongan') ? 'active' : '' }}">
            Tongkrongan
            </a>
        </li>

        <li>
            <a href="{{ route('promo') }}" 
            class="{{ request()->is('promo') ? 'active' : '' }}">
            Promo
            </a>
        </li>

        <li>
            <a href="{{ route('misi.index') }}" 
            class="{{ request()->is('misi') ? 'active' : '' }}">
            Misi
            </a>
        </li>

        <li>
            @guest
        <a href="{{ route('login') }}" class="px-4 py-2 bg-[#7D5A44] text-white rounded-md">
            Login / Daftar
        </a>
    @endguest

    @auth
        <a href="{{ route('profile') }}" class="flex items-center gap-2">
            <div class="w-8 h-8 bg-[#5A3D2B] text-white rounded-full flex justify-center items-center font-bold text-xs">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
            <span class="text-[#5A3D2B] font-bold">
                Halo, {{ explode(' ', Auth::user()->name)[0] }} </span>
        </a>
    @endauth
        </li>
    </ul>
</nav>

@yield('content')
@stack('scripts')

</body>
</html>