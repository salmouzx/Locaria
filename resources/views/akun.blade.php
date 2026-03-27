@extends('layouts.app')

@section('content')

<div class="relative w-full min-h-screen flex flex-col items-center justify-center p-6">
    
    <img src="images/bg-login.jpg" alt="Background Login" loading="lazy" class="absolute inset-0 w-full h-full object-cover bg-gray-500">
    
    <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>

    <div class="relative z-10 w-full max-w-[420px] flex flex-col items-center mt-10 md:mt-0">
        
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#FDF8F4] mb-8 drop-shadow-lg tracking-wide text-center">
            Selamat Datang
        </h1>

        <div class="w-full bg-white p-8 md:p-10 rounded-sm shadow-2xl flex flex-col items-center">
            
            <div class="flex items-center gap-2 mb-6">
                <div class="w-10 h-10 bg-[#5A3D2B] rounded-full flex items-center justify-center text-white font-bold text-lg shrink-0">
                    LR
                </div>
                <h2 class="font-extrabold text-xl text-[#5A3D2B] leading-tight">
                    Locaria
                </h2>
            </div>

            <p class="text-sm text-[#5A3D2B]/80 text-center mb-8 font-medium">
                Masuk atau daftar dengan cepat menggunakan akun Google Anda.
            </p>

            @if(session('error'))
                <div class="w-full mb-4 p-3 bg-red-100 border border-red-400 text-red-700 text-sm rounded text-center">
                    {{ session('error') }}
                </div>
            @endif

            <a href="{{ route('google.redirect') }}" 
               class="w-full bg-white border-2 border-[#E5D9CE] hover:border-[#8C6C54] hover:bg-[#FDF8F4] text-[#5A3D2B] font-bold py-3 px-4 rounded-md transition duration-200 shadow-sm flex items-center justify-center gap-3">
                <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                Lanjutkan dengan Google
            </a>

        </div>

        <p class="mt-8 text-[11px] text-white/80 tracking-widest text-center drop-shadow-md">
            © 2026 Locaria. All rights reserved.
        </p>

    </div>
</div>

@endsection