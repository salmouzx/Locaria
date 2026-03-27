<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Seeder;

class UmkmSeeder extends Seeder
{
    public function run()
    {
        $umkms = [
            [
                'id' => 1,
                'nama' => 'Burjo Aksata',
                'lokasi' => 'Sekaran, Gunungpati',
                'gambar' => 'aksata.jpg'
            ],
            [
                'id' => 2,
                'nama' => 'Warmindo 48 UNNES',
                'lokasi' => 'Gangsir, Gunungpati',
                'gambar' => 'warmindo48.jpg'
            ],
            [
                'id' => 3,
                'nama' => 'Teman Nongkrong',
                'lokasi' => 'Banaran, Gunungpati',
                'gambar' => 'temannongkrong.jpg'
            ],
            [
                'id' => 4,
                'nama' => 'Runa Coffee',
                'lokasi' => 'Patemon, Gunungpati',
                'gambar' => 'runa-coffee.jpg'
            ],
        ];

        foreach ($umkms as $umkm) {
            Umkm::create($umkm);
        }
    }
}