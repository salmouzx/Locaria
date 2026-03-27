@extends('layouts.app')

@section('content')

<div class="relative w-full min-h-screen flex flex-col items-center justify-center p-6">
    
    <img src="" alt="Background Login" loading="lazy" class="absolute inset-0 w-full h-full object-cover bg-gray-500">
    
    <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>

    <div class="relative z-10 w-full max-w-[420px] flex flex-col items-center mt-10 md:mt-0">
        
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#FDF8F4] mb-8 drop-shadow-lg tracking-wide text-center">
            Login Akun
        </h1>

        <div class="w-full bg-white p-8 md:p-10 rounded-sm shadow-2xl flex flex-col items-center">
            
            <div class="flex items-center gap-2 mb-8">
                <div class="w-10 h-10 bg-[#5A3D2B] rounded-full flex items-center justify-center text-white font-bold text-lg shrink-0">
                    LR
                </div>
                <h2 class="font-extrabold text-xl text-[#5A3D2B] leading-tight">
                    Loca<br>Ria
                </h2>
            </div>

            <form action="#" method="POST" class="w-full flex flex-col gap-5">
                @csrf <div>
                    <input type="text" name="email" placeholder="Username/ Email" required
                        class="w-full border border-[#8C6C54] rounded-sm px-4 py-3 outline-none focus:ring-1 focus:ring-[#5A3D2B] text-[#5A3D2B] placeholder-[#5A3D2B]/60 text-sm transition">
                </div>

                <div>
                    <input type="password" name="password" placeholder="Password" required
                        class="w-full border border-[#8C6C54] rounded-sm px-4 py-3 outline-none focus:ring-1 focus:ring-[#5A3D2B] text-[#5A3D2B] placeholder-[#5A3D2B]/60 text-sm transition">
                </div>

                <button type="submit"
                    class="w-full bg-[#7D5A44] hover:bg-[#5A3D2B] text-white font-bold py-3 mt-2 rounded-md transition shadow-md tracking-wide">
                    LOGIN
                </button>
            </form>

            <p class="mt-6 text-[13px] text-[#5A3D2B]">
                Belum punya akun? 
                <a href="#" class="text-[#B57A4E] hover:text-[#5A3D2B] transition font-semibold">
                    daftar sekarang
                </a>
            </p>
        </div>

        <p class="mt-8 text-[11px] text-white/80 tracking-widest text-center drop-shadow-md">
            © 2026 Locaria. All rights reserved.
        </p>

    </div>
</div>

@endsection