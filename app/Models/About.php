<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'image',
        'nama',
        'pengantar',
        'tgl_lahir',
        'tpt_lahir',
        'umur',
        'pendidikan',
        'nohp',
        'email',
        'kota',
        'pekerjaan',
        'tentang',
        'twitter',
        'instagram',
        'facebook',
        'tiktok',
    ];
}
