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
        Schema::create('breakfasts', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->bigInteger('siswa_id');
            $table->string('menu');
            $table->string('keterangan');
            $table->string('indikator');
            $table->string('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breakfasts');
    }
};
