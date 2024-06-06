<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class KindergartenController extends Controller
{
    public function welcome()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('guru.kindergarten.welcome.siswa', compact('siswas'));
    }
}
