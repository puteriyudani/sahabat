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
        Schema::create('mornings', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('siswa_id');
            $table->string('kegiatan');
            $table->string('circletime');
            $table->string('notifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mornings');
    }
};
