@extends('layouts.app')

@section('content')
<style>
    /* CSS untuk menyembunyikan scrollbar di daftar foto horizontal */
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

@php
    // Menghitung jumlah kunjungan yang sudah diupload (maksimal 3)
    $visitCount = min(count($visits), 3);
    // Menghitung persentase progress bar
    $progressPercentage = ($visitCount / 3) * 100;
@endphp

<div class="bg-[#FDF8F4] min-h-screen pb-16 pt-10 px-6 font-sans">
    <div class="max-w-4xl mx-auto space-y-8">
        
        <div class="bg-white p-6 rounded-2xl shadow-md border border-[#D5C3B3]/40 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <h1 class="text-2xl font-extrabold text-[#5A3D2B]">Upload Bukti Kunjungan</h1>
                <p class="text-sm text-[#5A3D2B]/70 mt-1">Misi: Traveller ke Mitra Kami (Reward: 150 Poin)</p>
            </div>
            <div class="text-left md:text-right w-full md:w-auto bg-[#FDF8F4] p-3 rounded-xl border border-[#D5C3B3]/50">
                <p class="text-xs font-bold text-[#8C6C54] mb-1.5">Progres Misi ({{ $visitCount }}/3 Kunjungan)</p>
                <div class="bg-[#E2D4C8] rounded-full h-3 w-full md:w-40 overflow-hidden">
                    <div class="bg-gradient-to-r from-[#8B5E34] to-[#5D4037] h-full rounded-full transition-all duration-500" style="width: {{ $progressPercentage }}%;"></div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6 relative shadow-sm">
                <span class="block sm:inline font-bold">{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6 relative shadow-sm">
                <span class="block sm:inline font-bold">{{ session('error') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6 relative shadow-sm">
                <strong class="font-bold">Waduh, gagal upload!</strong>
                <ul class="mt-2 list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-[#E2D4C8] p-6 md:p-8 rounded-2xl shadow-md border border-[#D5C3B3]/50">
            <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                
                <div>
                    <label class="block text-sm font-bold text-[#5A3D2B] mb-2">Upload Foto (Wajib ada Timestamp)</label>
                    <input type="file" name="foto_kunjungan" accept="image/*" required
                        class="w-full text-sm text-[#5A3D2B] file:mr-4 file:py-3 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-[#8C6C54] file:text-white hover:file:bg-[#5A3D2B] cursor-pointer bg-[#FDF8F4] rounded-xl border border-[#D5C3B3] transition-colors">
                    <p class="text-xs font-semibold text-[#8B5E34] mt-2">* File tidak boleh lebih dari 2MB (Format: JPG, PNG).</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-bold text-[#5A3D2B] mb-2">Nama Mitra / UMKM</label>
                        <input type="text" name="nama_mitra" required placeholder="Contoh: Burjo Aksata"
                            class="w-full border border-[#D5C3B3] bg-[#FDF8F4] rounded-xl px-4 py-3.5 outline-none focus:ring-2 focus:ring-[#8C6C54] text-[#5A3D2B]">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-[#5A3D2B] mb-2">Alamat Lokasi</label>
                        <input type="text" name="alamat_lokasi" required placeholder="Detail patokan alamat"
                            class="w-full border border-[#D5C3B3] bg-[#FDF8F4] rounded-xl px-4 py-3.5 outline-none focus:ring-2 focus:ring-[#8C6C54] text-[#5A3D2B]">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-[#5A3D2B] mb-2">Deskripsi Kunjungan</label>
                    <textarea name="deskripsi" rows="3" required placeholder="Ceritakan keseruan nongkrongmu di sini..."
                        class="w-full border border-[#D5C3B3] bg-[#FDF8F4] rounded-xl px-4 py-3.5 outline-none focus:ring-2 focus:ring-[#8C6C54] text-[#5A3D2B] resize-none"></textarea>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-[#8B5E34] to-[#5D4037] hover:from-[#5D4037] hover:to-[#3E2723] text-white font-bold py-4 rounded-xl transition-all shadow-lg mt-2 text-lg">
                    Simpan Data Kunjungan
                </button>
            </form>
        </div>

        <div class="pt-4 border-t border-[#D5C3B3]">
            <h2 class="text-xl font-bold text-[#5A3D2B] mb-5">Riwayat Kunjungan Misi Ini</h2>
            
            <div class="flex flex-row gap-5 overflow-x-auto snap-x snap-mandatory pb-4 hide-scrollbar">
                
                @for ($i = 0; $i < 3; $i++)
                    @if(isset($visits[$i]))
                        <div class="w-[280px] flex-shrink-0 bg-white rounded-2xl p-4 shadow-md border border-[#D5C3B3]/40 snap-start relative">
                            <div class="w-full aspect-video bg-gray-200 rounded-xl overflow-hidden relative mb-4">
                                <img src="{{ asset('storage/' . $visits[$i]->foto_kunjungan) }}" alt="Bukti" class="w-full h-full object-cover">
                                <div class="absolute bottom-2 right-2 bg-black/70 text-white text-[10px] font-mono px-2 py-1 rounded z-10">
                                    {{ $visits[$i]->created_at->format('d/m/Y H:i') }}
                                </div>
                            </div>

                            <div class="flex-col p-2 space-y-2">
                                <div class="flex items-start">
                                    <h3 class="font-bold text-[#5A3D2B] text-lg leading-tight">{{ $visits[$i]->nama_mitra }}</h3>
                                    
                                    {{-- Pindahkan Ikon Lencana Status ke dalam kotak teks --}}
                                    @if($visits[$i]->status == 'approved')
                                        <div class="bg-green-500 text-white rounded-full p-1.5 shadow-md ml-auto" title="Disetujui">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                    @elseif($visits[$i]->status == 'rejected')
                                        <div class="bg-red-500 text-white rounded-full p-1.5 shadow-md ml-auto" title="Ditolak">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
                                        </div>
                                    @else
                                        <div class="bg-yellow-400 text-white rounded-full p-1.5 shadow-md ml-auto" title="Menunggu Verifikasi">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                    @endif
                                </div>

                                <p class="text-[11px] font-semibold text-[#8C6C54] mb-2 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    {{ $visits[$i]->alamat_lokasi }}
                                </p>
                                <p class="text-sm text-[#5A3D2B]/80 line-clamp-2">{{ $visits[$i]->deskripsi }}</p>

                                @if($visits[$i]->status == 'pending')
                                    <p class="text-[10px] text-yellow-600 font-bold mt-2 bg-yellow-50 p-1.5 rounded text-center">Sedang Diperiksa Admin...</p>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="w-[280px] flex-shrink-0 bg-[#F5ECE5] rounded-2xl p-4 shadow-sm border-2 border-dashed border-[#D5C3B3] flex flex-col items-center justify-center snap-start min-h-[280px] text-[#5A3D2B]/40">
                            <svg class="w-12 h-12 mb-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class="font-bold text-sm">Belum ada foto</p>
                            <p class="text-xs mt-1">Kunjungan ke-{{ $i + 1 }}</p>
                        </div>
                    @endif
                @endfor

            </div>
        </div>

        <div class="mt-8 bg-white p-6 md:p-8 rounded-2xl shadow-md border border-[#D5C3B3]/40 text-center">
            <h3 class="text-2xl font-extrabold text-[#5A3D2B] mb-2">Selesaikan Misi!</h3>
            <p class="text-sm text-[#5A3D2B]/80 mb-6">Jika ketiga bukti kunjunganmu sudah lengkap, klik tombol di bawah untuk klaim reward.</p>
            
            <form action="{{ route('misi.claim') }}" method="POST">
                @csrf
                <button type="submit" class="w-full md:w-auto bg-[#8C6C54] hover:bg-[#5A3D2B] text-white font-bold py-3.5 px-10 rounded-full shadow-lg transition-colors text-lg flex items-center justify-center gap-2 mx-auto">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Klaim Reward (150 Poin)
                </button>
            </form>
        </div>

    </div>
</div>
@endsection