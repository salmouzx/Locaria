<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;

class ReviewController extends HomeController
{
public function store(StoreReviewRequest $request)
{
    // 1. Validasi inputan form
    $request->validate([
        'umkm_id' => 'required|exists:umkms,id', // pastikan ID tempat valid
        'rating' => 'required|integer|min:1|max:10',
        'comment' => 'required|string',
    ]);

    // 2. Simpan ke tabel reviews (Tabel yang kita buat di obrolan sebelumnya)
    Review::create([
        'umkm_id' => $request->umkm_id,
        'rating' => $request->rating,
        'comment' => $request->comment,
    ]);

    // 3. Kembalikan user ke halaman misi dengan notifikasi sukses
    return redirect()->back()->with('success', 'Ulasan berhasil dikirim! Poin misi Anda bertambah.');
}
}

