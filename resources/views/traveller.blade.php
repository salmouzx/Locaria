@extends('layouts.app')

@section('content')
<div class="bg-[#FDF8F4] min-h-screen flex items-center justify-center p-6 font-sans">
    
    <div class="max-w-2xl w-full bg-[#E2D4C8] p-10 rounded-[2rem] shadow-xl border border-[#D5C3B3]/50 text-center relative overflow-hidden">
        
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#FCECDD] rounded-full blur-3xl opacity-60 pointer-events-none"></div>
        <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-white rounded-full blur-3xl opacity-60 pointer-events-none"></div>

        <div class="relative z-10">
            <h1 class="text-3xl md:text-4xl font-extrabold text-[#5A3D2B] mb-5 tracking-tight">
                Traveller ke Mitra Kami
            </h1>
            
            <p class="text-[#5A3D2B]/80 text-base md:text-lg mb-10 leading-relaxed px-4">
                Kunjungi 3 mitra (usaha UMKM) Locaria dan unggah foto kunjunganmu yang memiliki keterangan waktu (timestamp). Selesaikan misi ini untuk mendapatkan reward sebesar <span class="font-bold text-[#8C6C54] text-xl">150 Poin!</span>
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-6">
                <a href="{{ route('upload.misi') }}" 
                   class="w-full sm:w-auto bg-[#8C6C54] hover:bg-[#5A3D2B] text-white font-bold py-3.5 px-10 rounded-full transition-colors shadow-lg shadow-[#8C6C54]/30 text-lg">
                    Ambil Misi
                </a>
                
                <a href="{{ route('misi.index') }}" 
                   class="w-full sm:w-auto bg-[#F5ECE5] hover:bg-[#EADDCF] text-[#5A3D2B] font-bold py-3.5 px-10 rounded-full transition-colors border border-[#D5C3B3] text-lg">
                    Tolak Misi
                </a>
            </div>
        </div>

    </div>
</div>
@endsection