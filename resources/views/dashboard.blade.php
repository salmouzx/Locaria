@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#F8F6F4] flex flex-col items-center justify-center p-6">
    
    <div class="w-full max-w-lg bg-white p-8 md:p-10 rounded-xl shadow-lg border border-[#E8DCC8] flex flex-col items-center text-center">
        
        <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mb-6">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <h1 class="text-3xl font-extrabold text-[#3E2723] mb-2">Login Berhasil!</h1>
        <p class="text-[#5D4037] mb-8">Selamat datang di LocaRia Dashboard.</p>

        <div class="w-full bg-[#FDFBF7] border border-[#E8DCC8] rounded-lg p-6 mb-8 text-left">
            <p class="text-sm text-gray-500 mb-1">Nama Lengkap:</p>
            <p class="font-bold text-[#3E2723] text-lg mb-4">{{ auth()->user()->name }}</p>

            <p class="text-sm text-gray-500 mb-1">Alamat Email:</p>
            <p class="font-bold text-[#3E2723] text-lg">{{ auth()->user()->email }}</p>
        </div>

        <form action="{{ route('logout') }}" method="POST" class="w-full">
            @csrf
            <button type="submit" class="w-full bg-red-50 hover:bg-red-100 text-red-600 font-bold py-3 px-4 border border-red-200 rounded-md transition duration-200">
                Logout Akun
            </button>
        </form>

    </div>
</div>
@endsection