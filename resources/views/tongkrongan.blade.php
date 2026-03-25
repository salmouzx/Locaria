@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">
    <img src="{{ asset('images/bgto.jpg') }}" loading="lazy" class="hero-img">
    <div class="hero-text" style="left:60px; right:auto; color:white;">
        <h1>Tongkrongan</h1>
    </div>
</section>

<!-- MITRA -->
<section class="tongkrongan">
    <h2>Mitra Kami</h2>
    <p>Mitra ini adalah blablablabla</p>

    <input type="text" placeholder="Nama" style="padding:10px; width:300px; border-radius:10px; border:1px solid #ccc;">

    <div class="cards" style="flex-wrap: wrap; margin-top:30px;">

        <!-- CARD 1 -->
        <a href="{{ route('aksata') }}">
            <div class="card" style="width:400px;">
                <img src="{{ asset('images/aksata.jpg') }}" loading="lazy">
                <div class="card-body">
                    <h3>Burjo Aksata</h3>
                    <p>Jl. Raya Banaran, Sekaran</p>
                    <p>Buka 24 jam</p>
                </div>
            </div>
        </a>

        <!-- CARD 2 -->
        <a href="{{ route('burketsu') }}">
            <div class="card" style="width:400px;">
                <img src="{{ asset('images/burketsu.jpg') }}" loading="lazy">
                <div class="card-body">
                    <h3>Burketsu</h3>
                    <p>Depan Anhesa Gym</p>
                    <p>10.00 - 04.00</p>
                </div>
            </div>
        </a>

        <!-- CARD 3 -->
        <a href="{{ route('burjoteko') }}">
            <div class="card" style="width:400px;">
                <img src="{{ asset('images/burjoteko.jpg') }}" loading="lazy">
                <div class="card-body">
                    <h3>Burjo Teko</h3>
                    <p>Gg. Cempaka Sari</p>
                    <p>Buka 24 jam</p>
                </div>
            </div>
        </a>

        <!-- CARD 4 -->
        <a href="{{ route('akhtara') }}">
            <div class="card" style="width:400px;">
                <img src="{{ asset('images/akhtara.jpg') }}" loading="lazy">
                <div class="card-body">
                    <h3>Akhtara Coffee and Eatery </h3>
                    <p>Gg. Cempaka Sari</p>
                    <p>10.00 - 23.00</p>
                </div>
            </div>
        </a>

        <!-- CARD 5 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/temannongkrong.jpg') }}" loading="lazy">
            <div class="card-body">
                <h3>Teman Nongkrong</h3>
                <p>Jl. Taman Siswa</p>
                <p>09.00 - 22.00</p>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/runa.jpg') }}" loading="lazy">
            <div class="card-body">
                <h3>Runa Coffee</h3>
                <p>Jl. Manggis Raya</p>
                <p>10.00 - 23.00</p>
            </div>
        </div>

        <!-- CARD 7 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/markaz.jpg') }}" loading="lazy">
            <div class="card-body">
                <h3>Markazz</h3>
                <p>Jl. Ampel Gading Raya</p>
                <p>19.00 - 02.00</p>
            </div>
        </div>

        <!-- CARD 8 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/warmindo48.jpg') }}" loading="lazy">
            <div class="card-body">
                <h3>warmindo 48 UNNES</h3>
                <p>Jl. Raya Banaran</p>
                <p>Buka 24 Jam</p>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">

        <div class="footer-left">
            <h3>Locaria</h3>
            <p>Sahabat jelajah lokalmu! Cari tempat nongkrong asik dan promo menarik.</p>
        </div>

        <div class="footer-center">
            <h3>Kontak Kami</h3>
            <p>Jl. Raya Banaran, Sekaran</p>
            <p>locaria@gmail.com</p>
            <p>0898-8909-9989</p>
        </div>

        <div class="footer-right">
            <h3>Galeri</h3>
            <div class="gallery">
                <img src="{{ asset('images/runa.jpg') }}" loading="lazy">
                <img src="{{ asset('images/temannongkrong.jpg') }}" loading="lazy">
                <img src="{{ asset('images/burketsu.jpg') }}" loading="lazy">
                <img src="{{ asset('images/markaz.jpg') }}" loading="lazy">
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 Locaria. All rights reserved
    </div>
</footer>

@endsection