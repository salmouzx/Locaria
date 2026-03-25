@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">
    <img src="{{ asset('images/bg.jpg') }}" loading="lazy" class="hero-img">
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
        <img src="{{ asset('images/garuda.jpg') }}" loading="lazy">
    </div>
</section>

<!-- TONGKRONGAN -->
<section class="tongkrongan">
    <h2>Tongkrongan Populer</h2>

    <div class="cards">
        @foreach($tongkrongan ?? [] as $item)
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

        <button class="scroll-btn left" onclick="scrollPromo(-1)">‹</button>

        <div class="promo-items" id="promoSlider">
            <div class="promo-item">
                <img src="{{ asset('images/aksata.jpg') }}">
                <span>Burjo Aksata</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/burketsu.jpg') }}">
                <span>Burketsu</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/burjoteko.jpg') }}">
                <span>Burjo Teko</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/akhtara.jpg') }}">
                <span>Akhtara Coffee</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/temannongkrong.jpg') }}">
                <span>Teman Nongkrong</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/runa.jpg') }}">
                <span>Runa Coffee</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/markaz.jpg') }}">
                <span>Warmindo Markazz</span>
            </div>
            <div class="promo-item">
                <img src="{{ asset('images/warmindo48.jpg') }}">
                <span>Warmino 48 UNNES</span>
            </div>
        </div>

        <button class="scroll-btn right" onclick="scrollPromo(1)">›</button>

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

@push('scripts')
<script>
function scrollPromo(direction) {
    const container = document.getElementById('promoSlider');
    const cardWidth = 170; // 150px + gap

    container.scrollBy({
        left: direction * cardWidth,
        behavior: 'smooth'
    });
}
</script>
@endpush