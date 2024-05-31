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
        Schema::create('islamics', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->bigInteger('siswa_id');
            $table->string('hadist');
            $table->string('hadist_stat');
            $table->string('quran');
            $table->string('quran_stat');
            $table->string('doa');
            $table->string('doa_stat');
            $table->string('notifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('islamics');
    }
};
