@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#FDF8F4] flex flex-col items-center justify-center p-6">
    
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-[#E5D9CE] relative overflow-hidden">
        
        <div class="absolute top-0 left-0 w-full h-2 bg-[#5A3D2B]"></div>

        <h1 class="text-3xl font-extrabold text-[#5A3D2B] mb-8 text-center tracking-tight">
            Profil Akun
        </h1>

        <div class="flex justify-center mb-6">
            <div class="w-24 h-24 bg-[#E5D9CE] rounded-full flex items-center justify-center text-[#5A3D2B] font-black text-4xl shadow-inner">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
        </div>

        <div class="space-y-4 mb-8">
            <div class="bg-[#F8F6F4] p-4 rounded-lg border border-[#E5D9CE]/50">
                <p class="text-[11px] text-[#8C6C54] font-bold uppercase tracking-wider mb-1">Nama Lengkap</p>
                <p class="text-lg font-bold text-[#5A3D2B]">{{ Auth::user()->name }}</p>
            </div>

            <div class="bg-[#F8F6F4] p-4 rounded-lg border border-[#E5D9CE]/50">
                <p class="text-[11px] text-[#8C6C54] font-bold uppercase tracking-wider mb-1">Alamat Email</p>
                <p class="text-lg font-bold text-[#5A3D2B]">{{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="w-full bg-gradient-to-r from-[#8B5E34] to-[#5A3D2B] rounded-xl p-5 mb-8 shadow-lg text-white flex items-center justify-between relative overflow-hidden">
    <div class="absolute -right-10 -top-10 w-32 h-32 bg-white opacity-5 rounded-full"></div>
    <div class="absolute right-10 -bottom-10 w-24 h-24 bg-white opacity-10 rounded-full"></div>

    <div class="relative z-10">
        <p class="text-white/80 text-xs font-bold uppercase tracking-wider mb-1">Total Saldo</p>
        <div class="flex items-center gap-2">
            <svg class="w-7 h-7 text-[#F5ECE5]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2A10 10 0 1022 12 10.011 10.011 0 0012 2zm0 18a8 8 0 118-8 8.009 8.009 0 01-8 8z"/><path d="M12 6a6 6 0 106 6 6.007 6.007 0 00-6-6zm0 10a4 4 0 114-4 4.005 4.005 0 01-4 4z"/></svg>
            <span class="text-3xl font-extrabold">{{ Auth::user()->locaria_coin }}</span>
        </div>
    </div>
    
    <div class="relative z-10">
        <span class="bg-[#F5ECE5] text-[#5A3D2B] text-xs font-extrabold px-3 py-1 rounded-full shadow-sm">
            Locaria Coin
        </span>
    </div>
</div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-[#7D5A44] hover:bg-[#5A3D2B] text-white font-bold py-3 px-4 rounded-md transition duration-300 shadow-md tracking-wide flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                </svg>
                Keluar (Logout)
            </button>
        </form>

    </div>

    <p class="mt-8 text-[12px] text-[#8C6C54] tracking-widest text-center">
        © 2026 Locaria. All rights reserved.
    </p>

</div>
@endsection