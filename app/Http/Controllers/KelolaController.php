<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class KelolaController extends Controller
{
    public function index()
    {
        return view('kelola.index');
    }

    public function kindergarten()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view ('kelola.kindergarten', compact('siswas'));
    }

    public function playgroup()
    {
        $siswas = Siswa::where('kelompok', 'playgroup')->get();
        return view ('kelola.playgroup', compact('siswas'));
    }

    public function babycamp()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view ('kelola.babycamp', compact('siswas'));
    }
}
