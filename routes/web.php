<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');


// --- Rute lainnya biarkan saja seperti semula ---
Route::get('/tongkrongan', function () {
    return view('tongkrongan');
})->name('tongkrongan');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');


Route::get('/misi', function () {
    return view('misi');
})->name('misi');


Route::get('/akun', function () {
    return view('akun');
})->name('akun');

Route::get('/aksata', fn() => view('aksata'))->name('aksata');
Route::get('/burketsu', fn() => view('burketsu'))->name('burketsu');
Route::get('/burjoteko', fn() => view('burjoteko'))->name('burjoteko');
Route::get('/akhtara', fn() => view('akhtara'))->name('akhtara');
Route::get('/teman-nongkrong', fn() => view('teman-nongkrong'))->name('teman-nongkrong');
Route::get('/runa-coffee', fn() => view('runa-coffee'))->name('runa-coffee');
Route::get('/warmindo-markaz', fn() => view('warmindo-markaz'))->name('warmindo-markaz');
Route::get('/warmindo48', fn() => view('warmindo48'))->name('warmindo48');
Route::get('/promo', fn() => view('promo'))->name('promo');

use App\Http\Controllers\ReviewController;

// Rute untuk memproses data dari form ulasan
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('google.callback');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    
    // Halaman Profile
    Route::get('/profile', function () {
        return view('profile'); // Akan memanggil file profile.blade.php
    })->name('profile');
}
);

Route::get('/login', function () {
    return view('akun'); // Sesuaikan dengan nama file view login kamu
})->name('login')->middleware('guest');

// Route untuk Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/'); // Ganti '/' dengan url halaman login Anda jika berbeda
})->name('logout');

use App\Http\Controllers\CheckInController;

Route::middleware('auth')->group(function () {
    // ... route profile
    Route::get('/check-in', [CheckInController::class, 'index'])->name('checkin.index');
    Route::post('/check-in/claim', [CheckInController::class, 'claim'])->name('checkin.claim');
});

Route::get('/misi/traveller', function () {
    return view('traveller'); // Mengarah ke resources/views/traveller.blade.php
})->name('traveller.index');

// Route untuk menampilkan halaman form upload misi
Route::get('/misi/upload', function () {
    // Pastikan nama di dalam view() sesuai dengan nama file blade kamu (tanpa .blade.php)
    return view('upload'); 
})->name('upload.misi');

Route::get('/misi/upload', function () {
    // Pastikan nama di dalam view() sesuai dengan nama file blade kamu (tanpa .blade.php)
    return view('upload'); 
})->name('upload.misi');

// Route untuk menampilkan halaman utama daftar misi (yang horizontal tadi)
Route::get('/misi', function () {
    // Ganti 'misi' dengan nama file blade halaman utamamu (tanpa .blade.php)
    // Misalnya jika nama filenya misi.blade.php, maka cukup tulis 'misi'
    return view('misi'); 
})->name('misi.index');


Route::get('/misi', function () {
    return view('misi');
})->name('misi.index');

// Tambahkan baris ini di bagian paling atas file web.php
use App\Http\Controllers\MissionVisitController; 

// ... rute misi dan traveller lainnya ...

// 1. Rute GET untuk MENAMPILKAN halaman form dan riwayat foto
Route::get('/misi/upload', [MissionVisitController::class, 'index'])->name('upload.misi');

// 2. Rute POST untuk MENYIMPAN data saat tombol submit ditekan
Route::post('/misi/upload', [MissionVisitController::class, 'store'])->name('upload.store');
Route::post('/misi/claim', [MissionVisitController::class, 'claimReward'])->name('misi.claim');

Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');

