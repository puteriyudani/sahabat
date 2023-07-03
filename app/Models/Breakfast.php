<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakfast extends Model
{
    use HasFactory;

    protected $table = 'breakfasts';
    protected $guarded = [];
    protected $fillable = ['kelas', 'tanggal', 'siswa_id', 'kudapanpagi', 'keterangan'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'breakfast_id');
    }
}
