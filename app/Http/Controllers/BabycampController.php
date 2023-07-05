<?php

namespace App\Http\Controllers;

use App\Models\Breakfast;
use App\Models\Intibaby;
use App\Models\Pembuka;
use App\Models\Pembukababy;
use App\Models\Penutupbaby;
use App\Models\Siswa;
use Illuminate\Http\Request;

class BabycampController extends Controller
{
    public function breakfast()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view('babycamp.breakfast', compact('siswas'));
    }

    public function pembuka()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view('babycamp.pembuka', compact('siswas'));
    }

    public function inti()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view('babycamp.inti', compact('siswas'));
    }

    public function penutup()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view('babycamp.penutup', compact('siswas'));
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
        $breakfasts = Breakfast::where('kelas', 'babycamp')
                            ->where('siswa_id', $siswa->id)
                            ->get();
        
        $pembukababys = Pembukababy::where('kelas', 'babycamp')
                            ->where('siswa_id', $siswa->id)
                            ->get();
        
        $intibabys = Intibaby::where('kelas', 'babycamp')
                            ->where('siswa_id', $siswa->id)
                            ->get();

        $penutupbabys = Penutupbaby::where('kelas', 'babycamp')
                            ->where('siswa_id', $siswa->id)
                            ->get();
        
        return view('kelola.babycampshow',compact('siswa', 'breakfasts', 'pembukababys', 'intibabys', 'penutupbabys'));
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
