<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intibaby extends Model
{
    use HasFactory;

    protected $table = 'intibabys';
    protected $guarded = [];
    protected $fillable = ['kelas', 'tanggal', 'siswa_id', 'inti', 'kudapansiang', 'keterangan'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'intibaby_id');
    }
}
