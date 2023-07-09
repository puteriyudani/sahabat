<?php

namespace App\Http\Controllers;

use App\Models\Breakfast;
use App\Models\Catatanguru;
use App\Models\Catatanorangtua;
use App\Models\Indikator;
use App\Models\Inti;
use App\Models\Pembuka;
use App\Models\Penutup;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KindergartenController extends Controller
{
    public function arrival()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.arrival', compact('siswas'));
    }

    public function breakfast()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.breakfast', compact('siswas'));
    }

    public function pembuka()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.pembuka', compact('siswas'));
    }

    public function inti()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.inti', compact('siswas'));
    }

    public function penutup()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.penutup', compact('siswas'));
    }

    public function catatan()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.catatan', compact('siswas'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Siswa $siswa)
    {
        $tanggal = $request->input('tanggal');

        $arrivals = Indikator::where('kelas', 'kindergarten')
                            ->where('kategori', 'arrival')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $breakfasts = Breakfast::where('kelas', 'kindergarten')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $pembukas = Pembuka::where('kelas', 'kindergarten')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $pembukaindikators = Indikator::where('kelas', 'kindergarten')
                            ->where('kategori', 'pembuka')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $intis = Inti::where('kelas', 'kindergarten')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        $intiindikators = Indikator::where('kelas', 'kindergarten')
                            ->where('kategori', 'inti')
                            ->where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $penutups = Penutup::where('kelas', 'kindergarten')
                            ->where('siswa_id', $siswa->id)  
                            ->whereDate('tanggal', $tanggal)                  
                            ->get();

        $catatangurus = Catatanguru::where('siswa_id', $siswa->id)                   
                            ->whereDate('tanggal', $tanggal)
                            ->get();

        $catatanorangtuas = Catatanorangtua::where('siswa_id', $siswa->id)
                            ->whereDate('tanggal', $tanggal)
                            ->get();
        
        return view('kelola.kindergartenshow', compact('tanggal', 'siswa', 'arrivals', 'breakfasts', 'pembukas', 'pembukaindikators', 'intis', 'intiindikators', 'penutups', 'catatangurus', 'catatanorangtuas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
