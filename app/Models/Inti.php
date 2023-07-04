<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inti extends Model
{
    use HasFactory;

    protected $table = 'intis';
    protected $guarded = [];
    protected $fillable = ['kelas', 'tanggal', 'siswa_id', 'inti'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'inti_id');
    }
}
