<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('umkms', function (Blueprint $table) {
        $table->id();
<<<<<<< HEAD
        $table->string('nama');
        $table->string('lokasi');
        $table->string('gambar')->nullable();
=======
        $table->string('name');
        $table->string('address');
        $table->string('image')->nullable();
>>>>>>> f612f9f0e505a9e974f9ce564797ae5098e906d6
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
