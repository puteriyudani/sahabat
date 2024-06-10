<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'kode',
        'kategori',
        'nama',
        'detail',
        'harga',
        'kondisi',
        'stok',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id');
    }
}
