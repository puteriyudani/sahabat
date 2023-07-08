<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatanguru extends Model
{
    use HasFactory;

    protected $table = 'catatangurus';
    protected $guarded = [];
    protected $fillable = ['tanggal', 'siswa_id', 'catatan'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'catatanguru_id');
    }
}
