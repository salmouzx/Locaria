@extends('layouts.app')

@section('content')

<!-- HERO DETAIL -->
<section class="hero">
    <img src="{{ asset('images/aksata.jpg') }}" loading="lazy" class="hero-img">

    <!-- overlay gradient -->
    <div class="hero-overlay"></div>

    <div class="hero-text">
        <h1>Burjo Aksata</h1>
        <p>Jam Buka: 24 jam</p>
    </div>
</section>

<!-- ABOUT DETAIL -->
<section class="about">
    
    <!-- FOTO -->
    <div>
        <img src="{{ asset('images/aksata.jpg') }}" loading="lazy">
    </div>

    <!-- INFO -->
    <div>
        <h2>About Us</h2>
        <p>📍 Jl. Raya Banaran, Sekaran, Kec. Gn. Pati, Kota Semarang</p>
        <p>📞 08123456789</p>

        <br>

        <a href="https://maps.google.com/?q=Burjo+Aksata+Semarang" loading="lazy" target="_blank">
            <iframe 
                src="https://www.google.com/maps?q=Burjo+Aksata+Semarang&output=embed"
                width="650" 
                height="200" 
                style="border:0; border-radius:10px;">
            </iframe>
        </a>
    </div>

</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">

        <div class="footer-left">
            <h2>Locaria</h2>
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