<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;

    protected $table = 'indikators';
    protected $guarded = [];
    protected $fillable = ['tanggal', 'siswa_id', 'kategori', 'kelas', 'indikator'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'indikator_id');
    }
}
