@extends('layouts.app')

@section('content')

    <div class="bg-[#FDF8F4] min-h-screen text-[#5A3D2B] font-sans pb-10 scroll-smooth">

        <section class="relative w-full h-[250px] flex items-center justify-center overflow-hidden bg-[#D5C3B3]">
            <img src="images/ukara.jpg" alt="Misi Background" loading="lazy"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-white/30"></div>

            <h1
                class="relative text-5xl md:text-6xl font-bold text-white tracking-widest drop-shadow-lg shadow-black/50 z-10">
                Misi
            </h1>
        </section>

        <main class="max-w-7xl mx-auto px-6 py-16 flex flex-row gap-6 overflow-x-auto hide-scrollbar snap-x snap-mandatory">

            <aside class="w-[240px] flex-shrink-0 bg-[#F5EFE6] p-6 rounded-2xl shadow-md border border-[#E8DCC8] snap-start">
                <div class="flex flex-col gap-4 items-center">

                    <h1 class="text-3xl font-extrabold text-[#3E2723] mb-4 tracking-tight">Mission</h1>

                    <a href="#misi-harian"
                        class="mission-btn bg-gradient-to-r from-[#8B5E34] to-[#5D4037] text-[#FDFBF7] shadow-md font-bold rounded-full px-6 py-3 w-full text-center transition-all duration-300">
                        Misi Harian
                    </a>

                    <a href="#traveller"
                        class="mission-btn bg-[#E6DCCF] text-[#5D4037] hover:bg-[#D8CBB9] font-semibold transition-all duration-300 rounded-full px-6 py-3 w-full text-center text-sm leading-tight">
                        Travel Di Mitra Kami
                    </a>
                </div>
            </aside>

            <script>
                const buttons = document.querySelectorAll('.mission-btn');
                const activeClass = 'bg-gradient-to-r from-[#8B5E34] to-[#5D4037] text-[#FDFBF7] shadow-md font-bold'.split(' ');
                const inactiveClass = 'bg-[#E6DCCF] text-[#5D4037] hover:bg-[#D8CBB9] font-semibold'.split(' ');

                buttons.forEach(btn => {
                    btn.addEventListener('click', function (e) {
                        buttons.forEach(b => {
                            b.classList.remove(...activeClass);
                            inactiveClass.forEach(cls => b.classList.add(cls));
                        });
                        inactiveClass.forEach(cls => this.classList.remove(cls));
                        this.classList.add(...activeClass);
                    });
                });
            </script>

            <section id="misi-harian" class="w-[260px] flex-shrink-0 bg-[#E2D4C8] p-6 rounded-2xl shadow-md border border-[#D5C3B3]/50 snap-start">
                <h2 class="text-xl font-bold text-[#5A3D2B] mb-5 text-center">Misi Harian</h2>
                <div class="space-y-4">
                    <a href="{{ route('checkin.index') }}"
                        class="bg-[#F5ECE5] rounded-xl p-4 flex justify-between items-center shadow-sm cursor-pointer hover:shadow-md hover:bg-[#EAE0D6] transition block">
                        <div>
                            <h3 class="font-bold text-[#5A3D2B] text-sm mb-1">Check In Harian</h3>
                            <div class="flex items-center gap-1.5 text-[10px] font-bold text-[#8C6C54]">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2A10 10 0 1022 12 10.011 10.011 0 0012 2zm0 18a8 8 0 118-8 8.009 8.009 0 01-8 8z"/><path d="M12 6a6 6 0 106 6 6.007 6.007 0 00-6-6zm0 10a4 4 0 114-4 4.005 4.005 0 01-4 4z"/></svg>
                                Dapatkan hingga 25 Koin!
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-[#8C6C54]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
            </section>


            <section id="traveller" class="w-[260px] flex-shrink-0 bg-[#E2D4C8] p-6 rounded-2xl shadow-md border border-[#D5C3B3]/50 snap-start">
                <h2 class="text-xl font-bold text-[#5A3D2B] mb-5 text-center">Traveller</h2>
                <div class="space-y-4">
                    <a href="{{ route('traveller.index') }}" class="bg-[#F5ECE5] rounded-xl p-4 flex justify-between items-center shadow-sm cursor-pointer hover:shadow-md transition block">
                        <div>
                            <h3 class="font-bold text-[#5A3D2B] text-sm mb-1">Kunjungi 3 Mitra</h3>
                            <div class="flex items-center gap-1.5 text-xs font-bold text-[#8C6C54]">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2A10 10 0 1022 12 10.011 10.011 0 0012 2zm0 18a8 8 0 118-8 8.009 8.009 0 01-8 8z"/><path d="M12 6a6 6 0 106 6 6.007 6.007 0 00-6-6zm0 10a4 4 0 114-4 4.005 4.005 0 01-4 4z"/></svg>
                                150
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-[#8C6C54]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </section>

        </main>

    <section class="mt-12 py-16 bg-[#F6EBE1] border-t border-[#EADDCF]">
        <<div
            class="mt-20 max-w-3xl mx-auto bg-white p-8 md:p-10 rounded-[2rem] shadow-xl border border-[#D5C3B3]/40 relative overflow-hidden">
            <div
                class="absolute -top-10 -right-10 w-32 h-32 bg-[#FCECDD] rounded-full blur-3xl opacity-60 pointer-events-none">
            </div>
            <div
                class="absolute -bottom-10 -left-10 w-32 h-32 bg-[#E2D4C8] rounded-full blur-3xl opacity-60 pointer-events-none">
            </div>

            <div class="relative z-10">
                <div class="text-center mb-8">
                    <h3 class="text-2xl md:text-3xl font-extrabold text-[#5A3D2B] mb-2">Beri Ulasanmu!</h3>
                    <p class="text-sm text-[#5A3D2B]/80">Bantu tongkrongan favoritmu menjadi nomor 1 di Loca Ria.</p>
                </div>

                <form action="{{ route('review.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-sm font-bold text-[#5A3D2B] mb-2">Pilih Tempat Tongkrongan</label>
                        <div class="relative">
                            <select name="umkm_id" required
                                class="w-full appearance-none border border-[#D5C3B3] bg-[#FDF8F4] rounded-xl px-4 py-3.5 outline-none focus:ring-2 focus:ring-[#8C6C54] text-[#5A3D2B] cursor-pointer">
                                <option value="" disabled selected>-- Pilih Mitra Loca Ria --</option>
                                <option value="1">Burjo Aksata</option>
                                <option value="2">Warmindo 48 UNNES</option>
                                <option value="3">Teman Nongkrong</option>
                                <option value="4">Runa Coffee</option>
                            </select>
                            <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-[#8C6C54]">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#5A3D2B] mb-2">Rating Tempat (1-10)</label>
                        <div class="flex justify-between gap-1 sm:gap-2">
                            @for ($i = 1; $i <= 10; $i++)
                                <label class="cursor-pointer flex-1">
                                    <input type="radio" name="rating" value="{{ $i }}" class="peer sr-only" required>
                                    <div
                                        class="w-full aspect-square flex items-center justify-center rounded-lg border border-[#D5C3B3] bg-[#FDF8F4] text-[#5A3D2B] font-bold text-xs md:text-sm hover:bg-[#EADDCF] peer-checked:bg-[#8C6C54] peer-checked:text-white peer-checked:border-[#8C6C54] peer-checked:shadow-md transition-all duration-200">
                                        {{ $i }}
                                    </div>
                                </label>
                            @endfor
                        </div>
                        <div
                            class="flex justify-between text-[10px] md:text-xs text-[#5A3D2B]/60 mt-1.5 font-semibold px-1">
                            <span>Sangat Buruk</span>
                            <span>Sangat Sempurna</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#5A3D2B] mb-2">Ulasan / Komentar</label>
                        <textarea name="comment" rows="4" required
                            placeholder="Ceritain pengalaman asikmu nongkrong di sini..."
                            class="w-full border border-[#D5C3B3] bg-[#FDF8F4] rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-[#8C6C54] text-[#5A3D2B] placeholder-[#5A3D2B]/40 resize-none"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-[#8C6C54] hover:bg-[#5A3D2B] text-white font-bold py-3.5 rounded-xl transition-colors shadow-lg shadow-[#8C6C54]/30 flex items-center justify-center gap-2 tracking-wide">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Kirim Ulasan & Selesaikan Misi
                    </button>
                </form>
            </div>
            </div>
    </section>

    <footer class="bg-[#FCECDD] px-6 pt-12 pb-6 border-t border-[#8C6C54]/20">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-10 h-10 bg-[#5A3D2B] rounded-full flex items-center justify-center text-white font-bold">
                        LR</div>
                    <h3 class="font-bold text-xl text-[#5A3D2B]">Loca Ria</h3>
                </div>
                <p class="text-sm text-[#5A3D2B]/80 leading-relaxed mb-6">
                    Sahabat setia jelajah lokalmu! Cari tempat nongkrong asik jadi lebih seru dengan poin reward dan promo
                    menarik setiap hari. Makin sering jajan lokal, makin banyak untungnya!
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
                    <img src="images/runa.jpg" loading="fast" class="w-full h-20 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/garuda.jpg" loading="fast" class="w-full h-20 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/markaz.jpg" loading="fast" class="w-full h-20 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/burjoteko.jpg" loading="fast" class="w-full h-20 object-cover rounded-md bg-[#D5C3B3]/50">
                </div>
            </div>

        </div>

        <div
            class="max-w-6xl mx-auto mt-10 pt-4 border-t border-[#5A3D2B]/20 text-xs text-[#5A3D2B]/80 flex flex-col md:flex-row justify-between items-center gap-2">
            <p>© 2026 Locaria. All rights reserved.</p>
            <div class="space-x-4">
                <a href="#" class="hover:underline">Terms and Conditions</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
            </div>
        </div>
    </footer>

    </div>

@endsection