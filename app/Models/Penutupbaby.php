<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penutupbaby extends Model
{
    use HasFactory;

    protected $table = 'penutupbabys';
    protected $guarded = [];
    protected $fillable = ['kelas', 'tanggal', 'siswa_id', 'doa', 'snack', 'bab', 'tidur', 'minumsusu'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'penutupbaby_id');
    }
}
