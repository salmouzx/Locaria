@extends('layouts.app')

@section('content')

    <div class="bg-[#FDF8F4] min-h-screen text-[#5A3D2B] font-sans">

        <section class="relative w-full h-[500px] md:h-[600px] flex items-center">
            <img src="images/bg.jpg" alt="Hero Background" loading="lazy"
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
                        Nikmati berbagai promo menarik dan eksklusif. Kumpulkan juga berbagai poin reward disetiap
                        transaksi.
                        <br><br>
                        Jadikan jajan lokal menjadi lebih seru dan menguntungkan!
                    </p>
                </div>
                <div class="relative">
                    <div
                        class="w-full h-64 md:h-80 bg-gray-300 rounded-3xl overflow-hidden shadow-xl border-4 border-[#8C6C54]/50">
                        <img src="images/garuda.jpg" loading="lazy" class="w-full h-full object-cover">
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
                    <p class="text-sm text-[#5A3D2B]/70 tracking-widest uppercase text-[11px] font-bold">Mitra Status Plus
                    </p>
                    <div class="w-32 h-0.5 bg-[#8C6C54] mx-auto mt-4"></div>
                </div>

                <div class="flex items-center justify-center gap-4 relative">
                    <button
                        class="w-10 h-10 rounded-full bg-[#8C6C54] text-white flex items-center justify-center hover:bg-[#5A3D2B] transition shadow-md z-10 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 flex-1">

                        @foreach($tongkronganPopuler as $tongkrongan)
                            <a href="#" class="relative w-full h-56 md:h-64 rounded-xl overflow-hidden group shadow-lg">
                                <img src="{{ asset('images/' . $tongkrongan->gambar) }}" loading="lazy"
                                    class="absolute inset-0 w-full h-full object-cover bg-gray-400">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#5A3D2B]/90 via-[#5A3D2B]/40 to-transparent">
                                </div>

                                <div
                                    class="absolute top-3 right-3 bg-black/50 backdrop-blur-sm text-yellow-400 text-xs font-bold px-2 py-1 rounded flex items-center gap-1">
                                    {{ number_format($tongkrongan->reviews_avg_rating ?? 0, 1) }}
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>

                                <div
                                    class="absolute bottom-4 left-0 w-full text-center text-white px-2 group-hover:translate-y-[-5px] transition">
                                    <h3 class="font-bold text-lg text-[#F4EAE2]">{{ $tongkrongan->nama }}</h3>
                                    <p class="text-[11px] text-white/80 line-clamp-1">{{ $tongkrongan->lokasi }}</p>
                                </div>
                            </a>
                        @endforeach

                    </div>

                    <button
                        class="w-10 h-10 rounded-full bg-[#8C6C54] text-white flex items-center justify-center hover:bg-[#5A3D2B] transition shadow-md z-10 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <section class="py-20 px-6 bg-[#FDF8F4]">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-extrabold text-[#5A3D2B] mb-2">Promo Tongkrongan</h2>
                    <p class="text-sm text-[#5A3D2B]/80">Nikmati promo gila yang membuat dompet Anda bahagia dan perut
                        kenyang</p>
                </div>

                <div class="bg-[#EADDCF] border-2 border-dashed border-[#8C6C54] rounded-xl p-8 md:p-12 relative">

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                        <a href="{{ route('promo') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                            <div class="flex flex-col items-center">
                                <div class="w-full aspect-square bg-gray-400 border-4 border-white shadow-sm mb-3">
                                    <img src="images/temannongkrong.jpg" loading="lazy" class="w-full h-full object-cover">
                                </div>
                                <p class="font-bold text-[#5A3D2B]">Teman Nongkrong</p>
                            </div>
                        </a>
                    <a href="{{ route('promo') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                        <div class="flex flex-col items-center">
                                <div class="w-full aspect-square bg-gray-400 border-4 border-white shadow-sm mb-3">
                                    <img src="images/aksata.jpg" loading="lazy" class="w-full h-full object-cover">
                                </div>
                                <p class="font-bold text-[#5A3D2B]">Burjo Aksata</p>
                        </div>
                    </a>
                    <a href="{{ route('promo') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                        <div class="flex flex-col items-center">
                                <div class="w-full aspect-square bg-gray-400 border-4 border-white shadow-sm mb-3">
                                    <img src="images/warmindo48.jpg" loading="lazy" class="w-full h-full object-cover">
                                </div>
                                <p class="font-bold text-[#5A3D2B]">Warmindo 48 UNNES</p>
                        </div>
                    </a>
                    <a href="{{ route('promo') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                        <div class="flex flex-col items-center">
                            <div class="w-full aspect-square bg-gray-400 border-4 border-white shadow-sm mb-3">
                                <img src="images/markaz.jpg" loading="lazy" class="w-full h-full object-cover">
                            </div>
                            <p class="font-bold text-[#5A3D2B]">Markazzz</p>
                        </div>
                    </a>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('promo') ?? '#' }}"
                            class="inline-block bg-[#8C6C54] text-white font-bold px-8 py-2.5 rounded-full hover:bg-[#5A3D2B] transition shadow-md text-sm">
                            Selengkapnya >
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-[#FCECDD] mt-10 px-6 pt-12 pb-6 border-t border-[#8C6C54]/20">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div
                            class="w-10 h-10 bg-[#5A3D2B] rounded-full flex items-center justify-center text-white font-bold">
                            LR</div>
                        <h3 class="font-bold text-xl text-[#5A3D2B]">Locaria</h3>
                    </div>
                    <p class="text-sm text-[#5A3D2B]/80 leading-relaxed mb-6">
                        Sahabat setia jelajah lokalmu! Cari tempat nongkrong asik jadi lebih seru dengan poin reward dan
                        promo menarik setiap hari. Makin sering jajan lokal, makin banyak untungnya!
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-8 h-8 rounded-full border border-[#5A3D2B] flex items-center justify-center text-[#5A3D2B] hover:bg-[#5A3D2B] hover:text-white transition">IG</a>
                        <a href="#"
                            class="w-8 h-8 rounded-full border border-[#5A3D2B] flex items-center justify-center text-[#5A3D2B] hover:bg-[#5A3D2B] hover:text-white transition">YT</a>
                        <a href="#"
                            class="w-8 h-8 rounded-full border border-[#5A3D2B] flex items-center justify-center text-[#5A3D2B] hover:bg-[#5A3D2B] hover:text-white transition">FB</a>
                    </div>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4 text-[#5A3D2B]">Kontak Kami</h3>
                    <ul class="space-y-3 text-sm text-[#5A3D2B]/80">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                            Jl. Raya Banaran, Sekaran
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            locaria@gmail.com
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                            0896-8909-9899
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4 text-[#5A3D2B]">Galeri</h3>
                    <div class="grid grid-cols-2 gap-2">
                        <img src="images/runa.jpg" loading="lazy" class="w-full h-20 md:h-24 object-cover rounded-md bg-[#D5C3B3]/50">
                        <img src="images/garuda.jpg" loading="lazy" class="w-full h-20 md:h-24 object-cover rounded-md bg-[#D5C3B3]/50">
                        <img src="images/markaz.jpg" loading="lazy" class="w-full h-20 md:h-24 object-cover rounded-md bg-[#D5C3B3]/50">
                        <img src="images/burjoteko.jpg" loading="lazy" class="w-full h-20 md:h-24 object-cover rounded-md bg-[#D5C3B3]/50">
                    </div>
                </div>

            </div>

            <div
                class="max-w-7xl mx-auto mt-10 pt-4 border-t border-[#5A3D2B]/20 text-xs text-[#5A3D2B]/80 flex flex-col md:flex-row justify-between items-center gap-2">
                <p>© 2024 Locaria. All rights reserved.</p>
                <div class="space-x-4">
                    <a href="#" class="hover:underline">Terms and Conditions</a>
                    <a href="#" class="hover:underline">Privacy Policy</a>
                </div>
            </div>
        </footer>

    </div>

@endsection