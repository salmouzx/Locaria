@extends('layouts.app')

@section('content')

<div class="bg-[#FDF8F4] min-h-screen font-sans">
    <section class="relative w-full h-[400px] md:h-[450px] flex items-center bg-[#FDF8F4]">
        <div class="absolute inset-0">
            <img src="{{ asset('images/aksata.jpg') }}" loading="lazy" class="w-full h-full object-cover bg-gray-400">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#FDF8F4]/80 to-[#FDF8F4]"></div>
        </div>
        <div class="relative z-10 w-full max-w-6xl mx-auto px-6 flex justify-end">
            <div class="text-right md:w-1/2">
                <p class="text-sm font-semibold tracking-widest text-[#8C6C54] mb-2">Tongkrongan ></p>
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#5A3D2B] mb-4">Burjo Aksata</h1>
                <p class="text-sm font-bold text-[#5A3D2B]/80">Jam Buka: Buka 24 Jam</p>
            </div>
        </div>
    </section>

```
<section class="relative w-full h-[400px] md:h-[450px] flex items-center bg-[#FDF8F4] overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/aksata.jpg') }}" loading="lazy" class="w-full h-full object-cover object-left md:object-center bg-gray-400">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent from-20% via-[#FDF8F4] via-65% to-[#FDF8F4]"></div>
    </div>
    
    <div class="relative z-10 w-full max-w-6xl mx-auto px-6 flex justify-end">
        <div class="w-full md:w-1/2 flex flex-col items-center md:items-start text-center md:text-left md:pl-8">
            <p class="text-sm font-semibold tracking-widest text-[#8C6C54] mb-2">Tongkrongan ></p>
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#5A3D2B] mb-4">Aksata</h1>
            <p class="text-sm font-medium text-[#5A3D2B]/80">Jam Buka: 24 Jam</p>
        </div>
    </div>
</section>

<section class="bg-[#6B4C3A] py-16 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div class="w-full h-64 md:h-80 bg-gray-300 rounded-2xl overflow-hidden shadow-xl border-4 border-[#8C6C54]/30">
            <img src="{{ asset('images/aksata.jpg') }}" loading="lazy" class="w-full h-full object-cover">
        </div>

        <div class="text-[#FDF8F4]">
            <h2 class="text-3xl font-extrabold mb-8 text-center md:text-left">About Us</h2>

            <div class="space-y-4 mb-8">
                <div class="flex items-start gap-3">
                    <svg class="w-5 h-5 shrink-0 mt-0.5 text-[#EADDCF]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></svg>
                    <p class="text-sm leading-relaxed text-[#FDF8F4]/90">Jl. Raya Banaran, Sekaran</p>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 shrink-0 text-[#EADDCF]" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59"/></svg>
                    <p class="text-sm text-[#FDF8F4]/90">0856-2444-6643</p>
                </div>
            </div>

            <div class="w-full h-48 md:h-56 bg-gray-200 rounded-2xl overflow-hidden relative shadow-lg border border-[#FDF8F4]/20 mt-6">
                <iframe src="https://maps.google.com/maps?q=Burjo+Aksata&t=&z=15&ie=UTF8&iwloc=&output=embed" class="absolute inset-0 w-full h-full" style="border:0;"></iframe>
            </div>
        </div>
    </div>
</section>

<footer class="bg-[#FCECDD] px-6 pt-12 pb-6">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
        
        <div>
            <h3 class="font-bold text-lg mb-4 text-[#5A3D2B]">Galeri</h3>
            <div class="grid grid-cols-2 gap-2">
                <img src="{{ asset('images/runa.jpg') }}" class="w-full h-20 object-cover rounded-md">
                <img src="{{ asset('images/garuda.jpg') }}" class="w-full h-20 object-cover rounded-md">
                <img src="{{ asset('images/markaz.jpg') }}" class="w-full h-20 object-cover rounded-md">
                <img src="{{ asset('images/burjoteko.jpg') }}" class="w-full h-20 object-cover rounded-md">
            </div>
        </div>

    </div>
</footer>
```

</div>

@endsection