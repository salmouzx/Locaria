<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CheckInController extends Controller
{
    // Menampilkan halaman check-in
    public function index()
    {
        $user = Auth::user();
        
        // BUNGKUS DENGAN CARBON::PARSE AGAR EDITOR PAHAM
        $lastCheckIn = $user->last_check_in ? Carbon::parse($user->last_check_in) : null;
        
        $alreadyCheckedIn = $lastCheckIn ? $lastCheckIn->isToday() : false;
        
        $currentStreak = $user->check_in_streak;
        
        // Gunakan variabel $lastCheckIn yang sudah dibungkus Carbon
        if ($lastCheckIn && !$lastCheckIn->isToday() && !$lastCheckIn->isYesterday()) {
            $currentStreak = 0; // Reset ke 0 jika bolos
        }

        return view('check-in', compact('user', 'alreadyCheckedIn', 'currentStreak'));
    }

    // Memproses klaim koin
    public function claim()
    {
        $user = Auth::user();
        $today = Carbon::today();
        
        // BUNGKUS DENGAN CARBON::PARSE
        $lastCheckIn = $user->last_check_in ? Carbon::parse($user->last_check_in) : null;

        // 1. Cek apakah sudah check-in hari ini
        if ($lastCheckIn && $lastCheckIn->isToday()) {
            return back()->with('error', 'Kamu sudah check-in hari ini!');
        }

        // 2. Hitung Streak (Urutan Hari)
        if ($lastCheckIn && $lastCheckIn->isYesterday()) {
            $streak = $user->check_in_streak + 1;
            if ($streak > 7) {
                $streak = 1; 
            }
        } else {
            $streak = 1; 
        }

        // 3. Tentukan Reward berdasarkan hari
        $reward = 0;
        if ($streak >= 1 && $streak <= 3) $reward = 5;
        elseif ($streak >= 4 && $streak <= 5) $reward = 10;
        elseif ($streak == 6) $reward = 20;
        elseif ($streak == 7) $reward = 25;

        // 4. Simpan ke database
        $user->locaria_coin += $reward;
        $user->check_in_streak = $streak;
        $user->last_check_in = $today;
        $user->save();

        return back()->with('success', "Yeay! Kamu dapat $reward Locaria Coin hari ini.");
    }
}