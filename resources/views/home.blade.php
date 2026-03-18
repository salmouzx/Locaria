@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">
    <img src="{{ asset('images/bg.jpg') }}" class="hero-img">
    <div class="hero-text">
        <h1>Eksplorasi Lokal,<br>Raih Keuntungan</h1>
        <p>Temukan rekomendasi UMKM terbaik</p>
        <button>Lihat Tongkrongan</button>
    </div>
</section>

<!-- ABOUT -->
<section class="about">
    <div class="about-text">
        <h2>Locaria</h2>
        <p>
            Locaria hadir untuk membantu menemukan UMKM sekitar.
            Nikmati berbagai promo menarik dan kumpulkan poin.
        </p>
    </div>
    <div class="about-img">
        <img src="{{ asset('images/tugu.jpg') }}">
    </div>
</section>

<!-- TONGKRONGAN -->
<section class="tongkrongan">
    <h2>Tongkrongan Populer</h2>

    <div class="cards">
        @foreach($tongkrongan as $item)
        <div class="card">
            <img src="{{ asset('images/' . $item['gambar']) }}">
            <div class="card-body">
                <h3>{{ $item['nama'] }}</h3>
                <p>{{ $item['lokasi'] }}</p>
                <span>⭐ {{ $item['rating'] }}</span>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- PROMO -->
<section class="promo">
    <h2>Promo Tongkrongan</h2>
    <p>Nikmati promo gila yang membuat anda menghabiskan uang tanpa perasaan</p>

    <div class="promo-box">
        <div class="promo-items">
            <div class="promo-item">
                <img src="{{ asset('images/promo1.jpg') }}">
                <span>Nama</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/promo2.jpg') }}">
                <span>Nama</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/promo3.jpg') }}">
                <span>Nama</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/promo4.jpg') }}">
                <span>Nama</span>
            </div>
        </div>

        <button class="btn-promo">Selengkapnya ></button>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">

        <div class="footer-left">
            <h2>LocaRia</h2>
            <p>
                Sahabat setia jelajah lokalmu! Cari tempat nongkrong asik jadi lebih seru
                dengan poin reward dan promo menarik setiap hari.
            </p>
        </div>

        <div class="footer-center">
            <h3>Kontak Kami</h3>
            <p>📍 Jl. Raya Banaran, Sekaran</p>
            <p>✉️ locaria@gmail.com</p>
            <p>📞 0898-8909-9889</p>
        </div>

        <div class="footer-right">
            <h3>Galeri</h3>
            <div class="gallery">
                <img src="{{ asset('images/g1.jpg') }}">
                <img src="{{ asset('images/g2.jpg') }}">
                <img src="{{ asset('images/g3.jpg') }}">
                <img src="{{ asset('images/g4.jpg') }}">
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 Locaria. All rights reserved
    </div>
</footer>

@endsection