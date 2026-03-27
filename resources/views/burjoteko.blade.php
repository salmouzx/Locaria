@extends('layouts.app')

@section('content')
<div class="bg-[#FDF8F4] min-h-screen font-sans">
    <section class="relative w-full h-[400px] md:h-[450px] flex items-center bg-[#FDF8F4]">
        <div class="absolute inset-0">
            <img src="images/burjoteko.jpg" loading="lazy" class="w-full h-full object-cover bg-gray-400">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#FDF8F4]/80 to-[#FDF8F4]"></div>
        </div>
        <div class="relative z-10 w-full max-w-6xl mx-auto px-6 flex justify-end">
            <div class="text-right md:w-1/2">
                <p class="text-sm font-semibold tracking-widest text-[#8C6C54] mb-2">Tongkrongan ></p>
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#5A3D2B] mb-4">Burjo Teko</h1>
                <p class="text-sm font-bold text-[#5A3D2B]/80">Jam Buka: 24 Jam</p>
            </div>
        </div>
    </section>

    <section class="bg-[#6B4C3A] py-16 px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="w-full h-64 md:h-80 bg-gray-300 rounded-2xl overflow-hidden shadow-xl border-4 border-[#8C6C54]/30">
                <img src="images/burjoteko.jpg" loading="lazy" class="w-full h-full object-cover">
            </div>
            <div class="text-[#FDF8F4]">
                <h2 class="text-3xl font-extrabold mb-8 text-center md:text-left">About Us</h2>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 mt-0.5 text-[#EADDCF]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <p class="text-sm leading-relaxed text-[#FDF8F4]/90">Gg. Cemp. Sari No.35, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 shrink-0 text-[#EADDCF]" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                        <p class="text-sm text-[#FDF8F4]/90">0851-8315-8048</p>
                    </div>
                </div>
                <div class="w-full h-40 bg-gray-200 rounded-xl overflow-hidden relative shadow-inner">
                    <img src="" loading="lazy" class="w-full h-full object-cover bg-[#D5C3B3]">
                    <div class="absolute inset-0 flex items-center justify-center text-[#5A3D2B] font-bold text-sm bg-white/40 backdrop-blur-sm">
                        <a href="https://maps.google.com/?q=Burjo+Teko" loading="lazy" target="_blank">
                            <iframe 
                                src="https://maps.google.com/?q=Burjo+Teko&output=embed"
                                width="575" 
                                height="165" 
                                style="border:0; border-radius:10px;">
                            </iframe>
                        </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#FCECDD] px-6 pt-12 pb-6">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-10 h-10 bg-[#5A3D2B] rounded-full flex items-center justify-center text-white font-bold">LR</div>
                    <h3 class="font-bold text-xl text-[#5A3D2B]">Locaria</h3>
                </div>
                <p class="text-sm text-[#5A3D2B]/80 leading-relaxed mb-6">Sahabat setia jelajah lokalmu! Cari tempat nongkrong asik jadi lebih seru dengan poin reward dan promo menarik setiap hari.</p>
                <div class="flex gap-4">
                    <a href="#" class="w-8 h-8 rounded-full border border-[#5A3D2B] flex items-center justify-center text-[#5A3D2B] hover:bg-[#5A3D2B] hover:text-white transition">IG</a>
                    <a href="#" class="w-8 h-8 rounded-full border border-[#5A3D2B] flex items-center justify-center text-[#5A3D2B] hover:bg-[#5A3D2B] hover:text-white transition">YT</a>
                </div>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4 text-[#5A3D2B]">Kontak Kami</h3>
                <ul class="space-y-3 text-sm text-[#5A3D2B]/80">
                    <li class="flex items-center gap-2">📍 Jl. Raya Banaran, Sekaran</li>
                    <li class="flex items-center gap-2">✉️ locaria@gmail.com</li>
                    <li class="flex items-center gap-2">📞 0896-8909-9899</li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4 text-[#5A3D2B]">Galeri</h3>
                <div class="grid grid-cols-2 gap-2">
                    <img src="images/runa.jpg" loading="fast" class="w-full h-20 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/garuda.jpg" loading="fast" class="w-full h-20 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/markaz.jpg" loading="fast" class="w-full h-20 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/burjoteko.jpg" loading="fast" class="w-full h-20 object-cover rounded-md bg-[#D5C3B3]/50">
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto mt-10 pt-4 border-t border-[#5A3D2B]/20 text-xs text-[#5A3D2B]/80 text-center md:text-left flex flex-col md:flex-row justify-between">
            <p>© 2026 Locaria. All rights reserved.</p>
            <div class="space-x-4 mt-2 md:mt-0"><a href="#" class="hover:underline">Terms</a><a href="#" class="hover:underline">Privacy Policy</a></div>
        </div>
    </footer>
    </div>
@endsection