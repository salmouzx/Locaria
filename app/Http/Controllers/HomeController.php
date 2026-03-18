<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tongkrongan = [
            [
                'nama' => 'Asato',
                'lokasi' => 'Jl. Raya Sekaran',
                'rating' => 4.7,
                'gambar' => 'asato.jpg'
            ],
            [
                'nama' => 'Warmindo 44',
                'lokasi' => 'Jl. Raya Sekaran',
                'rating' => 4.9,
                'gambar' => 'warmindo.jpg'
            ],
            [
                'nama' => 'Angkringan',
                'lokasi' => 'Sekitar Unnes',
                'rating' => 4.8,
                'gambar' => 'angkringan.jpg'
            ],
        ];

        return view('home', compact('tongkrongan'));
    }
}