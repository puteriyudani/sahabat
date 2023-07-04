<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $guarded = [];
    protected $fillable = ['orangtua_id', 'tahun_id', 'nama', 'panggilan', 'noinduk', 'kelompok', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'anakke', 'nama_ayah', 'nama_ibu', 'alamat', 'image'];

    public function ortu()
    {
        return $this->belongsTo(User::class);
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    public function breakfast()
    {
        return $this->belongsTo(Breakfast::class);
    }

    public function penutup()
    {
        return $this->belongsTo(Penutup::class);
    }

    public function penutupbaby()
    {
        return $this->belongsTo(Penutupbaby::class);
    }
}
