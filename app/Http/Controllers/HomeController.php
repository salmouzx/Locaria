<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class HomeController extends Controller
{
    public function index()
    {
        // Data dummy UMKM
        $dataUmkm = [
            [
                'nama' => 'Aksata Coffee',
                'lokasi' => 'Jl. Raya Sekaran',
                'rating' => 4.7,
                'gambar' => 'aksata.jpg'
            ],
            [
                'nama' => 'Warmindo 48',
                'lokasi' => 'Jl. Raya Sekaran',
                'rating' => 4.9,
                'gambar' => 'warmindo48.jpg'
            ],
            [
                'nama' => 'Angkringan',
                'lokasi' => 'Sekitar Unnes',
                'rating' => 4.8,
                'gambar' => 'angkringan.jpg'
            ],
            // Anda bisa tambahkan data UMKM ke-4, ke-5, dst di sini
            // Sistem akan otomatis menyeleksi 3 rating tertinggi
        ];

        // LOGIKA SORTING RATING TERTINGGI:
        // Ubah array jadi collection -> urutkan rating terbesar -> ambil 3 -> kembalikan jadi array
<<<<<<< HEAD
        $tongkronganPopuler = Umkm::withAvg('reviews', 'rating')
            ->orderByDesc('reviews_avg_rating')
            ->take(3)
            ->get();

        // 3. Kirim ke view (pastikan nama view-nya sesuai dengan punyamu)
=======
        $tongkronganPopuler = collect($dataUmkm)
            ->sortByDesc('rating')
            ->take(3)
            ->values()
            ->all();

        // Lempar variabel ke view
>>>>>>> f612f9f0e505a9e974f9ce564797ae5098e906d6
        return view('home', compact('tongkronganPopuler'));
    }
}