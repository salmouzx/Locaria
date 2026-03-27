<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mission_visits', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained(); // Hapus komentar ini jika kamu sudah punya sistem Login/User
            $table->string('foto_kunjungan');
            $table->string('nama_mitra');
            $table->string('alamat_lokasi');
            $table->text('deskripsi');
            // Kolom status inilah kunci untuk sistem verifikasi admin
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mission_visits');
    }
};