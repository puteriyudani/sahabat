<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembukababy extends Model
{
    use HasFactory;

    protected $table = 'pembukababys';
    protected $guarded = [];
    protected $fillable = ['kelas', 'tanggal', 'siswa_id', 'circletime', 'surahpendek'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'pembukababy_id');
    }
}
