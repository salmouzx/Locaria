@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#FDF8F4] flex flex-col items-center p-6">
    
    <div class="w-full max-w-lg mb-4">
        <a href="{{ route('profile') }}" class="text-[#8C6C54] hover:text-[#5A3D2B] font-bold flex items-center gap-2 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali
        </a>
    </div>

    <div class="w-full max-w-lg bg-white p-6 md:p-8 rounded-2xl shadow-lg border border-[#E5D9CE]">
        
        <h1 class="text-3xl font-extrabold text-[#5A3D2B] mb-2 text-center">Misi Harian</h1>
        <p class="text-center text-[#8C6C54] text-sm mb-8 font-medium">Check-in berturut-turut untuk mendapatkan lebih banyak hadiah!</p>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6 text-center font-bold text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-4 gap-3 md:gap-4 mb-8">
            
            @php
                $rewards = [5, 5, 5, 10, 10, 20, 25];
            @endphp

            @for ($i = 1; $i <= 7; $i++)
                @php
                    $isPast = $i <= $currentStreak;
                    $isToday = $i == ($currentStreak + 1);
                    $isFuture = $i > ($currentStreak + 1);

                    // Khusus hari ke-7 agar lebar (col-span-2) jika mau layoutnya bagus
                    $gridClass = ($i == 7) ? "col-span-2" : "col-span-1";
                    
                    // Style berdasarkan status
                    if ($isPast) {
                        $bgClass = "bg-[#E6DCCF] border-[#D8CBB9] opacity-70";
                        $textClass = "text-[#8C6C54]";
                    } elseif ($isToday && !$alreadyCheckedIn) {
                        $bgClass = "bg-gradient-to-br from-[#8B5E34] to-[#5A3D2B] border-[#5A3D2B] shadow-md transform scale-105";
                        $textClass = "text-[#FDF8F4]";
                    } else {
                        $bgClass = "bg-[#F8F6F4] border-[#E5D9CE]";
                        $textClass = "text-[#5A3D2B]";
                    }
                @endphp

                <div class="flex flex-col items-center justify-center p-3 rounded-xl border-2 {{ $gridClass }} {{ $bgClass }} transition-all">
                    <span class="text-[10px] md:text-xs font-bold uppercase mb-1 {{ $textClass }}">Hari {{ $i }}</span>
                    
                    <svg class="w-6 h-6 md:w-8 md:h-8 mb-1 {{ $textClass }}" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2A10 10 0 1022 12 10.011 10.011 0 0012 2zm0 18a8 8 0 118-8 8.009 8.009 0 01-8 8z"/><path d="M12 6a6 6 0 106 6 6.007 6.007 0 00-6-6zm0 10a4 4 0 114-4 4.005 4.005 0 01-4 4z"/></svg>
                    
                    <span class="text-sm md:text-lg font-extrabold {{ $textClass }}">+{{ $rewards[$i-1] }}</span>
                    
                    @if($isPast)
                        <svg class="w-4 h-4 text-green-600 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    @endif
                </div>
            @endfor

        </div>

        <form action="{{ route('checkin.claim') }}" method="POST">
            @csrf
            @if($alreadyCheckedIn)
                <button disabled type="button" class="w-full bg-[#E5D9CE] text-[#8C6C54] font-bold py-4 rounded-xl cursor-not-allowed">
                    Sudah Check-in Hari Ini
                </button>
            @else
                <button type="submit" class="w-full bg-[#7D5A44] hover:bg-[#5A3D2B] text-white font-extrabold py-4 rounded-xl shadow-lg transition-all hover:shadow-xl transform hover:-translate-y-1">
                    Check-in Sekarang
                </button>
            @endif
        </form>

    </div>
</div>
@endsection