<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penutup extends Model
{
    use HasFactory;

    protected $table = 'penutups';
    protected $guarded = [];
    protected $fillable = ['kelas', 'tanggal', 'siswa_id', 'doa', 'bab'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'penutup_id');
    }
}
