@extends('layouts.app')

@section('content')

<div class="bg-[#FDF8F4] min-h-screen font-sans">

    <section class="relative w-full h-[400px] md:h-[450px] flex items-center bg-[#FDF8F4] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/burjoteko.jpg') }}" loading="lazy" class="w-full h-full object-cover object-left md:object-center bg-gray-400">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent from-20% via-[#FDF8F4] via-65% to-[#FDF8F4]"></div>
        </div>
        
        <div class="relative z-10 w-full max-w-6xl mx-auto px-6 flex justify-end">
            <div class="w-full md:w-1/2 flex flex-col items-center md:items-start text-center md:text-left md:pl-8">
                <p class="text-sm font-semibold tracking-widest text-[#8C6C54] mb-2">Tongkrongan ></p>
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#5A3D2B] mb-4">Burjo Teko</h1>
                <p class="text-sm font-medium text-[#5A3D2B]/80">Jam Buka: 24 Jam</p>
            </div>
        </div>
    </section>

    <section class="bg-[#6B4C3A] py-16 px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            
            <div class="w-full h-64 md:h-80 bg-gray-300 rounded-2xl overflow-hidden shadow-xl border-4 border-[#8C6C54]/30">
                <img src="{{ asset('images/burjoteko.jpg') }}" loading="lazy" class="w-full h-full object-cover">
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

                <div class="w-full h-48 md:h-56 bg-gray-200 rounded-2xl overflow-hidden relative shadow-lg border border-[#FDF8F4]/20 mt-6">
                    <iframe src="https://maps.google.com/maps?q=Burjo+Teko&t=&z=15&ie=UTF8&iwloc=&output=embed" class="absolute inset-0 w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <p class="text-sm text-[#5A3D2B]/80 leading-relaxed mb-6">
                    Sahabat setia jelajah lokalmu! Cari tempat nongkrong asik jadi lebih seru dengan poin reward dan promo menarik setiap hari. Makin sering jajan lokal, makin banyak untungnya!
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-8 h-8 rounded-full border border-[#5A3D2B] flex items-center justify-center text-[#5A3D2B] hover:bg-[#5A3D2B] hover:text-white transition">IG</a>
                    <a href="#" class="w-8 h-8 rounded-full border border-[#5A3D2B] flex items-center justify-center text-[#5A3D2B] hover:bg-[#5A3D2B] hover:text-white transition">YT</a>
                    <a href="#" class="w-8 h-8 rounded-full border border-[#5A3D2B] flex items-center justify-center text-[#5A3D2B] hover:bg-[#5A3D2B] hover:text-white transition">FB</a>
                </div>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4 text-[#5A3D2B]">Kontak Kami</h3>
                <ul class="space-y-3 text-sm text-[#5A3D2B]/80">
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                        Jl. Raya Banaran, Sekaran
                    </li>
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" /><path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" /></svg>
                        locaria@gmail.com
                    </li>
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" /></svg>
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

        <div class="max-w-6xl mx-auto mt-10 pt-4 border-t border-[#5A3D2B]/20 text-xs text-[#5A3D2B]/80 flex flex-col md:flex-row justify-between items-center gap-2">
            <p>© 2026 Locaria. All rights reserved.</p>
            <div class="space-x-4">
                <a href="#" class="hover:underline">Terms and Conditions</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
            </div>
        </div>
    </footer>

</div>
@endsection