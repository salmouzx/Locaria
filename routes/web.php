<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('home');
})->name('beranda');

Route::get('/tongkrongan', function () {
    return view('tongkrongan');
})->name('tongkrongan');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/akun', function () {
    return view('akun');
})->name('akun');