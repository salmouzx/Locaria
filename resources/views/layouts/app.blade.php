<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Locaria</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar">
    <div class="logo">Locaria</div>
    <ul>
        <li>
            <a href="{{ route('beranda') }}" 
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
            <a href="{{ route('menu') }}" 
            class="{{ request()->is('menu') ? 'active' : '' }}">
            Menu
            </a>
        </li>

        <li>
            <a href="{{ route('akun') }}" 
            class="{{ request()->is('akun') ? 'active' : '' }}">
            Akun
            </a>
        </li>
    </ul>
</nav>

@yield('content')
@stack('scripts')

</body>
</html>