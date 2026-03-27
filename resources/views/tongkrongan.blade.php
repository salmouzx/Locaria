@extends('layouts.app')

@section('content')

<div class="flex flex-col min-h-screen bg-[#FDF8F4] text-[#5A3D2B] font-sans">

    <div class="flex-grow">
        
        <section class="relative w-full h-[500px] md:h-[600px] flex items-center justify-center overflow-hidden bg-[#D5C3B3] group z-0">

            <div id="heroSlider" class="absolute inset-0 w-full h-full flex overflow-x-auto scroll-smooth snap-x snap-mandatory z-0 no-scrollbar">
                
                <div class="flex-shrink-0 w-full h-full snap-start relative">
                    <img src="{{ asset('images/temannongkrong2.jpg') }}" alt="Slider 1" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-white/30"></div> 
                </div>

                <div class="flex-shrink-0 w-full h-full snap-start relative">
                    <img src="{{ asset('images/boston-coffe1.jpg') }}" alt="Slider 2" loading="lazy" class="absolute inset-0 w-full h-full object-cover bg-gray-700">
                    <div class="absolute inset-0 bg-white/30"></div> 
                </div>

                <div class="flex-shrink-0 w-full h-full snap-start relative">
                    <img src="{{ asset('images/boston-coffe2.jpg') }}" alt="Slider 3" loading="lazy" class="absolute inset-0 w-full h-full object-cover bg-gray-500">
                    <div class="absolute inset-0 bg-white/30"></div> 
                </div>

            </div>

            <h1 class="relative text-5xl md:text-7xl font-extrabold text-white tracking-widest drop-shadow-lg shadow-black/50 z-10 pointer-events-none">
                Tongkrongan
            </h1>

            <button id="prevBtn" class="absolute left-6 md:left-10 z-20 w-12 h-12 md:w-14 md:h-14 flex items-center justify-center rounded-lg bg-black/30 backdrop-blur-sm text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-black/50">
                <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button id="nextBtn" class="absolute right-6 md:right-10 z-20 w-12 h-12 md:w-14 md:h-14 flex items-center justify-center rounded-lg bg-black/30 backdrop-blur-sm text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-black/50">
                <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <div class="absolute bottom-8 z-20 flex gap-2.5">
                <button class="slider-dot w-3 h-3 rounded-full bg-white transition-all"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white/50 border border-white transition-all"></button>
                <button class="slider-dot w-3 h-3 rounded-full bg-white/50 border border-white transition-all"></button>
            </div>
        </section>

        <main class="max-w-6xl mx-auto px-6 py-12">
            
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2 text-[#5A3D2B]">Mitra Kami</h2>
                <p class="text-sm text-[#5A3D2B]/80 font-medium">Mitra ini adalah UMKM lokal</p>
            </div>

            <div class="flex justify-center items-center gap-3 mb-10 max-w-4xl mx-auto">
                <div class="flex-1 bg-white border border-[#D5C3B3] rounded-md px-4 py-2 shadow-sm">
                    <input type="text" placeholder="Nama" class="w-full bg-transparent outline-none text-[#5A3D2B] placeholder-[#5A3D2B]/50">
                </div>
                
                <button class="bg-[#B57A4E] text-white p-2.5 rounded-md hover:bg-[#96633D] transition flex items-center justify-center w-11 h-11">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                    </svg>
                </button>
                
                <button class="bg-[#B57A4E] text-white p-2.5 rounded-md hover:bg-[#96633D] transition flex items-center justify-center w-11 h-11">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <a href="{{ route('aksata') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                    <img src="images/aksata.jpg" loading="lazy" class="w-32 h-32 object-cover rounded-lg shrink-0 bg-[#D5C3B3]/50">
                    <div class="flex-1 pr-6 flex flex-col justify-center">
                        <h3 class="font-bold text-lg mb-2">Burjo Aksata</h3>
                        <div class="flex items-start gap-1.5 text-[11px] leading-tight mb-2 text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                            <p>Jl. Raya Banaran, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 52228</p>
                        </div>
                        <div class="flex items-center gap-1.5 text-[11px] text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p>Buka 24 jam</p>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 text-[#5A3D2B]/60 group-hover:text-[#B57A4E] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </a>

                <a href="{{ route('burketsu') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                    <img src="images/burketsu.jpg" loading="lazy" class="w-32 h-32 object-cover rounded-lg shrink-0 bg-[#D5C3B3]/50">
                    <div class="flex-1 pr-6 flex flex-col justify-center">
                        <h3 class="font-bold text-lg mb-2">Burketsu</h3>
                        <div class="flex items-start gap-1.5 text-[11px] leading-tight mb-2 text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                            <p>Depan Anhesa Gym, Jl. Kolonel Hardiyanto, Rt 3 rw 4, Dukuh Mbanaran, Sekaran, Kota Semarang, Jawa Tengah 50229</p>
                        </div>
                        <div class="flex items-center gap-1.5 text-[11px] text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p>10.00 - 04.00</p>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 text-[#5A3D2B]/60 group-hover:text-[#B57A4E] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </a>

                <a href="{{ route('burjoteko') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                    <img src="images/burjoteko.jpg" loading="lazy" class="w-32 h-32 object-cover rounded-lg shrink-0 bg-[#D5C3B3]/50">
                    <div class="flex-1 pr-6 flex flex-col justify-center">
                        <h3 class="font-bold text-lg mb-2">Burjo Teko</h3>
                        <div class="flex items-start gap-1.5 text-[11px] leading-tight mb-2 text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                            <p>Gg. Cemp. Sari No.35, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229</p>
                        </div>
                        <div class="flex items-center gap-1.5 text-[11px] text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p>Buka 24 jam</p>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 text-[#5A3D2B]/60 group-hover:text-[#B57A4E] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </a>

                <a href="{{ route('akhtara') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                    <img src="images/akhtara.jpg" loading="lazy" class="w-32 h-32 object-cover rounded-lg shrink-0 bg-[#D5C3B3]/50">
                    <div class="flex-1 pr-6 flex flex-col justify-center">
                        <h3 class="font-bold text-lg mb-2">Akhtara Coffee</h3>
                        <div class="flex items-start gap-1.5 text-[11px] leading-tight mb-2 text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                            <p>Jl. Cemp. Sari V, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229</p>
                        </div>
                        <div class="flex items-center gap-1.5 text-[11px] text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p>16.00 - 20.00</p>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 text-[#5A3D2B]/60 group-hover:text-[#B57A4E] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </a>

                <a href="{{ route('teman-nongkrong') }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                    <img src="images/temannongkrong.jpg" loading="lazy" class="w-32 h-32 object-cover rounded-lg shrink-0 bg-[#D5C3B3]/50">
                    <div class="flex-1 pr-6 flex flex-col justify-center">
                        <h3 class="font-bold text-lg mb-2">Teman Nongkrong</h3>
                        <div class="flex items-start gap-1.5 text-[11px] leading-tight mb-2 text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                            <p>Jl. Taman Siswa, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229</p>
                        </div>
                        <div class="flex items-center gap-1.5 text-[11px] text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p>09.00 - 22.00</p>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 text-[#5A3D2B]/60 group-hover:text-[#B57A4E] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </a>

                <a href="{{ route('runa-coffee') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                    <img src="images/runa.jpg" loading="lazy" class="w-32 h-32 object-cover rounded-lg shrink-0 bg-[#D5C3B3]/50">
                    <div class="flex-1 pr-6 flex flex-col justify-center">
                        <h3 class="font-bold text-lg mb-2">Runa Coffee</h3>
                        <div class="flex items-start gap-1.5 text-[11px] leading-tight mb-2 text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                            <p>Jl. Manggis Raya No.8 B, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229</p>
                        </div>
                        <div class="flex items-center gap-1.5 text-[11px] text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p>10.00 - 23.00</p>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 text-[#5A3D2B]/60 group-hover:text-[#B57A4E] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </a>

                <a href="{{ route('warmindo-markaz') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                    <img src="images/warmindo-markaz.jpg" loading="lazy" class="w-32 h-32 object-cover rounded-lg shrink-0 bg-[#D5C3B3]/50">
                    <div class="flex-1 pr-6 flex flex-col justify-center">
                        <h3 class="font-bold text-lg mb-2">Warmindo Markazzz</h3>
                        <div class="flex items-start gap-1.5 text-[11px] leading-tight mb-2 text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                            <p>Jl. Ampel Gading Raya, Kalisegoro, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50228</p>
                        </div>
                        <div class="flex items-center gap-1.5 text-[11px] text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p>09.00 - 02.00</p>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 text-[#5A3D2B]/60 group-hover:text-[#B57A4E] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </a>

                <a href="{{ route('warmindo48') ?? '#' }}" class="group block relative border border-[#D5C3B3] rounded-xl p-4 flex gap-4 bg-[#FDF8F4] hover:shadow-md transition">
                    <img src="images/warmindo48.jpg" loading="lazy" class="w-32 h-32 object-cover rounded-lg shrink-0 bg-[#D5C3B3]/50">
                    <div class="flex-1 pr-6 flex flex-col justify-center">
                        <h3 class="font-bold text-lg mb-2">Warmindo 48 UNNES</h3>
                        <div class="flex items-start gap-1.5 text-[11px] leading-tight mb-2 text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0"><path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                            <p>Jl. Raya Banaran, Sekaran, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50229</p>
                        </div>
                        <div class="flex items-center gap-1.5 text-[11px] text-[#5A3D2B]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p>Buka 24 Jam</p>
                        </div>
                    </div>
                    <div class="absolute bottom-4 right-4 text-[#5A3D2B]/60 group-hover:text-[#B57A4E] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </div>
                </a>

            </div>
        </main>

    </div>

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

<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('heroSlider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dots = document.querySelectorAll('.slider-dot');

        if(!slider) return;

        function updateDots() {
            const activeIndex = Math.round(slider.scrollLeft / slider.offsetWidth);
            dots.forEach((dot, index) => {
                if (index === activeIndex) {
                    dot.className = "slider-dot w-4 h-3 rounded-full bg-white transition-all duration-300";
                } else {
                    dot.className = "slider-dot w-3 h-3 rounded-full bg-white/50 border border-white transition-all duration-300";
                }
            });
        }

        slider.addEventListener('scroll', updateDots);

        nextBtn.addEventListener('click', () => {
            const slideWidth = slider.offsetWidth;
            if (slider.scrollLeft >= slideWidth * 2 - 10) {
                slider.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                slider.scrollTo({ left: slider.scrollLeft + slideWidth, behavior: 'smooth' });
            }
        });

        prevBtn.addEventListener('click', () => {
            const slideWidth = slider.offsetWidth;
            if (slider.scrollLeft <= 10) {
                slider.scrollTo({ left: slideWidth * 2, behavior: 'smooth' });
            } else {
                slider.scrollTo({ left: slider.scrollLeft - slideWidth, behavior: 'smooth' });
            }
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                slider.scrollTo({ left: index * slider.offsetWidth, behavior: 'smooth' });
            });
        });
    });
</script>

@endsection