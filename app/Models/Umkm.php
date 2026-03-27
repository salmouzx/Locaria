<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $guarded = [];

    // Relasi One-to-Many ke Review
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
