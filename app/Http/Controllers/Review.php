<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Mengizinkan Laravel memasukkan data ke kolom-kolom ini (Mass Assignment)
    protected $fillable = [
        'umkm_id',
        'rating',
        'comment',
    ];

    /**
     * Relasi ke model Umkm (Inverse One-to-Many)
     * Artinya: Setiap 1 review pasti dimiliki oleh 1 UMKM.
     */
    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}