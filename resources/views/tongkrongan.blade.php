@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">
    <img src="{{ asset('images/bgto.jpg') }}" loading="lazy" class="hero-img">
    <div class="hero-text">
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
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/aksata.jpg') }}">
            <div class="card-body">
                <h3>Burjo Aksata</h3>
                <p>Jl. Raya Banaran, Sekaran</p>
                <p>Buka 24 jam</p>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/burketsu.jpg') }}">
            <div class="card-body">
                <h3>Burketsu</h3>
                <p>Depan Anhesa Gym</p>
                <p>10.00 - 04.00</p>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/burjoteko.jpg') }}">
            <div class="card-body">
                <h3>Burjo Teko</h3>
                <p>Gg. Cemp. Sari</p>
                <p>Buka 24 jam</p>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/akhtara.jpg') }}">
            <div class="card-body">
                <h3>Akhtara Coffee</h3>
                <p>Sekaran</p>
                <p>10.00 - 23.00</p>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/temannongkrong.jpg') }}">
            <div class="card-body">
                <h3>Teman Nongkrong</h3>
                <p>Taman Siswa</p>
                <p>09.00 - 22.00</p>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="card" style="width:400px;">
            <img src="{{ asset('images/runa.jpg') }}">
            <div class="card-body">
                <h3>Runa Coffee</h3>
                <p>Jl. Manggis Raya</p>
                <p>10.00 - 23.00</p>
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
                <img src="{{ asset('images/runa.jpg') }}">
                <img src="{{ asset('images/temannongkrong.jpg') }}">
                <img src="{{ asset('images/burketsu.jpg') }}">
                <img src="{{ asset('images/markaz.jpg') }}">
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 Locaria. All rights reserved
    </div>
</footer>

@endsection