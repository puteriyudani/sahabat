<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    protected $table = 'galerys';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kategori',
        'judul',
        'detail',
        'tanggal',
        'link',
    ];

    public function images()
    {
        return $this->hasMany(GaleryImage::class, 'galery_id');
    }
}
