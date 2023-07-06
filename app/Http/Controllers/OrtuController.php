<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrtuController extends Controller
{
    public function index()
    {
        return view('orangtua.index');
    }

    public function siswa()
    {
        $ortu = Auth::user(); 
        $kindergarten = $ortu->siswa()->where('kelompok', 'kindergarten')->get();
        $playgroup = $ortu->siswa()->where('kelompok', 'playgroup')->get();
        $babycamp = $ortu->siswa()->where('kelompok', 'babycamp')->get();

        return view('orangtua.siswa', compact('kindergarten', 'playgroup', 'babycamp'));

    }
}
