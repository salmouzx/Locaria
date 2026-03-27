<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// --- INI YANG KITA PERBAIKI ---
// Sekarang halaman utama (/) akan mengambil data dari HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');


// --- Rute lainnya biarkan saja seperti semula ---
Route::get('/tongkrongan', function () {
    return view('tongkrongan');
})->name('tongkrongan');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/misi', function () {
    return view('misi'); // Sepertinya ini untuk halaman Misi ya?
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