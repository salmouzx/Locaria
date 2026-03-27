<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MissionVisit;
use Illuminate\Support\Facades\Storage;



class MissionVisitController extends Controller
{
    // Menampilkan halaman form dan riwayat
    public function index()
    {
        // Ambil data kunjungan (Jika sudah ada sistem login, tambahkan: ->where('user_id', auth()->id()))
        $visits = MissionVisit::latest()->get(); 
        
        return view('upload', compact('visits'));
    }

    // Menyimpan data dari form
    public function store(Request $request)
    {
        $request->validate([
            'foto_kunjungan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_mitra' => 'required|string|max:255',
            'alamat_lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Simpan foto ke folder storage/app/public/kunjungan
        $fotoPath = $request->file('foto_kunjungan')->store('kunjungan', 'public');

        // Simpan data ke database (Status otomatis 'pending')
        MissionVisit::create([
            // 'user_id' => auth()->id(), // Aktifkan jika pakai auth
            'foto_kunjungan' => $fotoPath,
            'nama_mitra' => $request->nama_mitra,
            'alamat_lokasi' => $request->alamat_lokasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return back()->with('success', 'Foto berhasil diupload dan sedang menunggu verifikasi Admin!');
    }

    // Method untuk menangani tombol Klaim Reward
    public function claimReward(Request $request)
    {
        // 1. Hitung jumlah foto yang sudah diupload (Nanti tambahkan ->where('user_id', auth()->id()) jika sudah ada login)
        $jumlahKunjungan = MissionVisit::count();

        // 2. Cek apakah jumlahnya kurang dari 3
        if ($jumlahKunjungan < 3) {
            // Jika kurang dari 3, kembalikan ke halaman sebelumnya dengan pesan ERROR
            return back()->with('error', 'Misi belum selesai! Kamu harus mengupload minimal 3 bukti kunjungan.');
        }

        // 3. (Opsional) Cek apakah 3 kunjungan tersebut SUDAH DISETUJUI ADMIN
        $jumlahDisetujui = MissionVisit::where('status', 'approved')->count();
        if ($jumlahDisetujui < 3) {
            return back()->with('error', 'Kunjunganmu sedang diverifikasi Admin. Tunggu sampai 3 kunjungan disetujui ya untuk klaim reward!');
        }

        // 4. Jika semua syarat terpenuhi, berikan reward (Nanti integrasikan dengan database User)
        /* $user = auth()->user();
        $user->locaria_coin += 150;
        $user->save(); 
        */

        // Kembalikan dengan pesan SUKSES
        return back()->with('success', 'Selamat! Misi selesai dan reward 150 Poin berhasil ditambahkan ke akunmu!');
    }
}

