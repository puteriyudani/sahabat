<?php

namespace App\Http\Controllers;

use App\Models\Breakfast;
use App\Models\Indikator;
use App\Models\Inti;
use App\Models\Pembuka;
use App\Models\Penutup;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PlaygroupController extends Controller
{
    public function arrival()
    {
        $siswas = Siswa::where('kelompok', 'playgroup')->get();
        return view('playgroup.arrival', compact('siswas'));
    }

    public function breakfast()
    {
        $siswas = Siswa::where('kelompok', 'playgroup')->get();
        return view('playgroup.breakfast', compact('siswas'));
    }

    public function pembuka()
    {
        $siswas = Siswa::where('kelompok', 'playgroup')->get();
        return view('playgroup.pembuka', compact('siswas'));
    }

    public function inti()
    {
        $siswas = Siswa::where('kelompok', 'playgroup')->get();
        return view('playgroup.inti', compact('siswas'));
    }

    public function penutup()
    {
        $siswas = Siswa::where('kelompok', 'playgroup')->get();
        return view('playgroup.penutup', compact('siswas'));
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
    public function show(Siswa $siswa)
    {
        $arrivals = Indikator::where('kelas', 'playgroup')
                            ->where('kategori', 'arrival')
                            ->where('siswa_id', $siswa->id)
                            ->get();

        $breakfasts = Breakfast::where('kelas', 'playgroup')
                            ->where('siswa_id', $siswa->id)
                            ->get();

        $pembukas = Pembuka::where('kelas', 'playgroup')
                            ->where('siswa_id', $siswa->id)
                            ->get();

        $pembukaindikators = Indikator::where('kelas', 'playgroup')
                            ->where('kategori', 'pembuka')
                            ->where('siswa_id', $siswa->id)
                            ->get();

        $intis = Inti::where('kelas', 'playgroup')
                            ->where('siswa_id', $siswa->id)
                            ->get();
        
        $intiindikators = Indikator::where('kelas', 'playgroup')
                            ->where('kategori', 'inti')
                            ->where('siswa_id', $siswa->id)
                            ->get();

        $penutups = Penutup::where('kelas', 'playgroup')
                            ->where('siswa_id', $siswa->id)                    
                            ->get();
        
        return view('kelola.playgroupshow',compact('siswa', 'arrivals', 'breakfasts', 'pembukas', 'pembukaindikators', 'intis', 'intiindikators', 'penutups'));
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
