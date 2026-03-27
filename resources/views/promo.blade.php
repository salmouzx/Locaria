@extends('layouts.app')

@section('content')

<div class="bg-[#FDF8F4] min-h-screen text-[#5A3D2B] font-sans pb-10 scroll-smooth">

    <section class="relative w-full h-[250px] flex items-center justify-center overflow-hidden bg-[#D5C3B3]">
        <img src="" alt="Promo Background" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-white/30"></div> 
        
        <h1 class="relative text-5xl md:text-6xl font-bold text-white tracking-widest drop-shadow-lg shadow-black/50 z-10">
            Promo
        </h1>
    </section>

    <main class="max-w-7xl mx-auto px-6 py-16 flex flex-col md:flex-row gap-12">
        
<aside class="md:w-1/4 hidden md:block">
    <div class="flex flex-col gap-5 text-xl font-extrabold text-[#5A3D2B]">
        
        <a href="#warmindo-48" class="group flex items-center gap-3 hover:text-[#B57A4E] transition duration-200">
            <span class="w-3 h-3 bg-[#5A3D2B] group-hover:bg-[#B57A4E] transition duration-200 shrink-0"></span>
            Warmindo Online 48
        </a>
        
        <a href="#burjo-boim" class="group flex items-center gap-3 hover:text-[#B57A4E] transition duration-200">
            <span class="w-3 h-3 bg-[#5A3D2B] group-hover:bg-[#B57A4E] transition duration-200 shrink-0"></span>
            Burjo Boim Banaran
        </a>
        
        <a href="#teman-nongkrong" class="group flex items-center gap-3 hover:text-[#B57A4E] transition duration-200">
            <span class="w-3 h-3 bg-[#5A3D2B] group-hover:bg-[#B57A4E] transition duration-200 shrink-0"></span>
            Teman Nongkrong
        </a>
        
        <a href="#burjo-asep" class="group flex items-center gap-3 hover:text-[#B57A4E] transition duration-200">
            <span class="w-3 h-3 bg-[#5A3D2B] group-hover:bg-[#B57A4E] transition duration-200 shrink-0"></span>
            Burjo Asep 2
        </a>
        
    </div>
</aside>

        <div class="md:w-3/4 space-y-16">

            <section id="warmindo-48" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-[#5A3D2B] mb-6">Warmindo Online 48</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="flex gap-4 items-start">
                        <img src="" loading="lazy" class="w-28 h-28 object-cover rounded-xl shrink-0 bg-[#D5C3B3]/60 shadow-sm">
                        <div class="flex flex-col">
                            <h3 class="font-bold text-[16px]">Iced Americano</h3>
                            <p class="text-[#B57A4E] font-bold text-sm mb-1">Rp 15.000 > 10 Poin</p>
                            <p class="text-[12px] text-[#5A3D2B]/80 leading-relaxed">Espresso shot yang di mix dengan air dingin menghasilkan rasa kopi yang kuat dan menyegarkan.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <img src="" loading="lazy" class="w-28 h-28 object-cover rounded-xl shrink-0 bg-[#D5C3B3]/60 shadow-sm">
                        <div class="flex flex-col">
                            <h3 class="font-bold text-[16px]">Iced Americano</h3>
                            <p class="text-[#B57A4E] font-bold text-sm mb-1">Rp 15.000 > 10 Poin</p>
                            <p class="text-[12px] text-[#5A3D2B]/80 leading-relaxed">Espresso shot yang di mix dengan air dingin menghasilkan rasa kopi yang kuat dan menyegarkan.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <img src="" loading="lazy" class="w-28 h-28 object-cover rounded-xl shrink-0 bg-[#D5C3B3]/60 shadow-sm">
                        <div class="flex flex-col">
                            <h3 class="font-bold text-[16px]">Iced Americano</h3>
                            <p class="text-[#B57A4E] font-bold text-sm mb-1">Rp 15.000 > 10 Poin</p>
                            <p class="text-[12px] text-[#5A3D2B]/80 leading-relaxed">Espresso shot yang di mix dengan air dingin menghasilkan rasa kopi yang kuat dan menyegarkan.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <img src="" loading="lazy" class="w-28 h-28 object-cover rounded-xl shrink-0 bg-[#D5C3B3]/60 shadow-sm">
                        <div class="flex flex-col">
                            <h3 class="font-bold text-[16px]">Iced Americano</h3>
                            <p class="text-[#B57A4E] font-bold text-sm mb-1">Rp 15.000 > 10 Poin</p>
                            <p class="text-[12px] text-[#5A3D2B]/80 leading-relaxed">Espresso shot yang di mix dengan air dingin menghasilkan rasa kopi yang kuat dan menyegarkan.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="burjo-boim" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-[#5A3D2B] mb-6">Burjo Boim Banaran</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="flex gap-4 items-start">
                        <img src="" loading="lazy" class="w-28 h-28 object-cover rounded-xl shrink-0 bg-[#D5C3B3]/60 shadow-sm">
                        <div class="flex flex-col">
                            <h3 class="font-bold text-[16px]">Iced Americano</h3>
                            <p class="text-[#B57A4E] font-bold text-sm mb-1">Rp 15.000 > 10 Poin</p>
                            <p class="text-[12px] text-[#5A3D2B]/80 leading-relaxed">Espresso shot yang di mix dengan air dingin menghasilkan rasa kopi yang kuat dan menyegarkan.</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </section>

            <section id="teman-nongkrong" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-[#5A3D2B] mb-6">Teman Nongkrong</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="flex gap-4 items-start">
                        <img src="" loading="lazy" class="w-28 h-28 object-cover rounded-xl shrink-0 bg-[#D5C3B3]/60 shadow-sm">
                        <div class="flex flex-col">
                            <h3 class="font-bold text-[16px]">Iced Americano</h3>
                            <p class="text-[#B57A4E] font-bold text-sm mb-1">Rp 15.000 > 10 Poin</p>
                            <p class="text-[12px] text-[#5A3D2B]/80 leading-relaxed">Espresso shot yang di mix dengan air dingin menghasilkan rasa kopi yang kuat dan menyegarkan.</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </section>

            <section id="burjo-asep" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-[#5A3D2B] mb-6">Burjo Asep 2</h2>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="flex gap-4 items-start">
                        <img src="" loading="lazy" class="w-28 h-28 object-cover rounded-xl shrink-0 bg-[#D5C3B3]/60 shadow-sm">
                        <div class="flex flex-col">
                            <h3 class="font-bold text-[16px]">Iced Americano</h3>
                            <p class="text-[#B57A4E] font-bold text-sm mb-1">Rp 15.000 > 10 Poin</p>
                            <p class="text-[12px] text-[#5A3D2B]/80 leading-relaxed">Espresso shot yang di mix dengan air dingin menghasilkan rasa kopi yang kuat dan menyegarkan.</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </section>

        </div>
    </main>

    <footer class="bg-[#FCECDD] mt-16 px-6 pt-12 pb-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            
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
                    <img src="images/runa.jpg" loading="lazy" class="w-full h-24 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/garuda.jpg" loading="lazy" class="w-full h-24 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/markaz.jpg" loading="lazy" class="w-full h-24 object-cover rounded-md bg-[#D5C3B3]/50">
                    <img src="images/burjoteko.jpg" loading="lazy" class="w-full h-24 object-cover rounded-md bg-[#D5C3B3]/50">
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto mt-10 pt-4 border-t border-[#5A3D2B]/20 text-xs text-[#5A3D2B]/80 flex flex-col md:flex-row justify-between items-center gap-2">
            <p>© 2026 Locaria. All rights reserved.</p>
            <div class="space-x-4">
                <a href="#" class="hover:underline">Terms and Conditions</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
            </div>
        </div>
    </footer>

</div>

@endsection