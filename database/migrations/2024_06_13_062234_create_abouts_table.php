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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('image');
            $table->string('nama');
            $table->string('pengantar');
            $table->string('tgl_lahir');
            $table->string('tpt_lahir');
            $table->string('umur');
            $table->string('pendidikan');
            $table->string('nohp')->nullable();
            $table->string('email')->nullable();
            $table->string('kota');
            $table->string('pekerjaan');
            $table->string('tentang');
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
