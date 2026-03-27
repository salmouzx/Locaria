@extends('layouts.app')

@section('content')

<div class="bg-[#FDF8F4] min-h-screen text-[#5A3D2B] font-sans">

    <section class="relative w-full h-[500px] md:h-[600px] flex items-center">
        <img src="{{ asset('images/bg.jpg') }}" alt="Hero Background" loading="lazy"
            class="absolute inset-0 w-full h-full object-cover bg-gray-700">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <div class="max-w-2xl text-white">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">
                    Eksplorasi Lokal,<br>Raih Keuntungan
                </h1>
                <p class="mb-8 text-white/90 text-sm md:text-base leading-relaxed">
                    Temukan spot nongkrong asik, nikmati promo spesial, dan kumpulkan poin reward yang menguntungkan!
                </p>
                <a href="#tongkrongan"
                    class="inline-block bg-[#5A3D2B] text-white font-bold px-6 py-2.5 rounded-full 
                    hover:bg-[#E8D5C4] hover:!text-[#5A3D2B] transition shadow-md">
                    Lihat Tongkrongan
                </a>
            </div>
        </div>
    </section>

    <section class="bg-[#8C6C54] py-16 md:py-24 px-6 relative">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-[#FDF8F4]">
                <h2 class="text-4xl font-extrabold mb-6 drop-shadow-sm">Locaria</h2>
                <p class="text-sm md:text-base leading-relaxed text-[#FDF8F4]/90">
                    Locaria hadir untuk membantu anda mendapatkan pengalaman terbaik dalam menjelajahi UMKM sekitar.
                    Nikmati berbagai promo menarik dan eksklusif. Kumpulkan juga berbagai poin reward disetiap transaksi.
                    <br><br>
                    Jadikan jajan lokal menjadi lebih seru dan menguntungkan!
                </p>
            </div>
            <div class="relative">
                <div
                    class="w-full h-64 md:h-80 bg-gray-300 rounded-3xl overflow-hidden shadow-xl border-4 border-[#8C6C54]/50">
                    <img src="{{ asset('images/garuda.jpg') }}" loading="lazy" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="tongkrongan" class="bg-[#F4EAE2] py-20 px-6 relative overflow-hidden z-0">
        <div class="absolute top-10 right-10 w-40 h-40 border-[1px] border-[#8C6C54]/30 rounded-full z-[-1]"></div>
        <div class="absolute top-20 right-32 w-24 h-24 border-[1px] border-[#8C6C54]/30 rounded-full z-[-1]"></div>
        <div class="absolute bottom-10 left-10 w-32 h-32 border-[1px] border-[#8C6C54]/30 rounded-full z-[-1]"></div>

        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-[#5A3D2B] mb-2">Tongkrongan Populer</h2>
                <p class="text-sm text-[#5A3D2B]/70 tracking-widest uppercase text-[11px] font-bold">Mitra Status Plus</p>
                <div class="w-32 h-0.5 bg-[#8C6C54] mx-auto mt-4"></div>
            </div>

            <div class="flex items-center justify-center gap-4 relative">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 flex-1">

                    @foreach($tongkronganPopuler as $tongkrongan)
                    <a href="#" class="relative w-full h-56 md:h-64 rounded-xl overflow-hidden group shadow-lg">
                        <img src="{{ asset('images/' . $tongkrongan->gambar) }}" loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover bg-gray-400">

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#5A3D2B]/90 via-[#5A3D2B]/40 to-transparent">
                        </div>

                        <div
                            class="absolute bottom-4 left-0 w-full text-center text-white px-2 group-hover:translate-y-[-5px] transition">
                            <h3 class="font-bold text-lg text-[#F4EAE2]">{{ $tongkrongan->nama }}</h3>
                            <p class="text-[11px] text-white/80 line-clamp-1">{{ $tongkrongan->lokasi }}</p>
                        </div>
                    </a>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-[#FDF8F4]">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-[#5A3D2B] mb-2">Promo Tongkrongan</h2>
                <p class="text-sm text-[#5A3D2B]/80">Nikmati promo gila yang membuat dompet Anda bahagia</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <img src="{{ asset('images/temannongkrong.jpg') }}" class="w-full h-40 object-cover rounded">
                <img src="{{ asset('images/aksata.jpg') }}" class="w-full h-40 object-cover rounded">
                <img src="{{ asset('images/warmindo48.jpg') }}" class="w-full h-40 object-cover rounded">
                <img src="{{ asset('images/markaz.jpg') }}" class="w-full h-40 object-cover rounded">

            </div>
        </div>
    </section>

    <footer class="bg-[#FCECDD] mt-10 px-6 pt-12 pb-6 border-t border-[#8C6C54]/20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

            <div>
                <h3 class="font-bold text-xl text-[#5A3D2B]">Locaria</h3>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4 text-[#5A3D2B]">Kontak Kami</h3>
                <p>locaria@gmail.com</p>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4 text-[#5A3D2B]">Galeri</h3>
                <div class="grid grid-cols-2 gap-2">
                    <img src="{{ asset('images/runa.jpg') }}" class="w-full h-20 object-cover">
                    <img src="{{ asset('images/garuda.jpg') }}" class="w-full h-20 object-cover">
                    <img src="{{ asset('images/markaz.jpg') }}" class="w-full h-20 object-cover">
                    <img src="{{ asset('images/burjoteko.jpg') }}" class="w-full h-20 object-cover">
                </div>
            </div>

        </div>
    </footer>

</div>

@endsection