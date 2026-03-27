<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Cek dan buat kolom locaria_coin
            if (!Schema::hasColumn('users', 'locaria_coin')) {
                $table->integer('locaria_coin')->default(0)->after('email');
            }
            
            // Cek dan buat kolom check_in_streak
            if (!Schema::hasColumn('users', 'check_in_streak')) {
                $table->integer('check_in_streak')->default(0)->after('locaria_coin');
            }
            
            // Cek dan buat kolom last_check_in
            if (!Schema::hasColumn('users', 'last_check_in')) {
                $table->date('last_check_in')->nullable()->after('check_in_streak');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom hanya jika kolom tersebut ada
            if (Schema::hasColumn('users', 'locaria_coin')) {
                $table->dropColumn('locaria_coin');
            }
            if (Schema::hasColumn('users', 'check_in_streak')) {
                $table->dropColumn('check_in_streak');
            }
            if (Schema::hasColumn('users', 'last_check_in')) {
                $table->dropColumn('last_check_in');
            }
        });
    }
};