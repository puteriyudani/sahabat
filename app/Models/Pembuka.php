<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembuka extends Model
{
    use HasFactory;

    protected $table = 'pembukas';
    protected $guarded = [];
    protected $fillable = ['kelas', 'tanggal', 'siswa_id', 'outdoor', 'circletime', 'doapembuka'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'pembuka_id');
    }
}
