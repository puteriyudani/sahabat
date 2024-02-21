<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use App\Models\Siswa;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function kindergartenpembuka()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.indikatorpembuka', compact('siswas'));
    }

    public function kindergarteninti()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.indikatorinti', compact('siswas'));
    }

    public function playgrouppembuka()
    {
        $siswas = Siswa::where('kelompok', 'playgroup')->get();
        return view('playgroup.indikatorpembuka', compact('siswas'));
    }

    public function playgroupinti()
    {
        $siswas = Siswa::where('kelompok', 'playgroup')->get();
        return view('playgroup.indikatorinti', compact('siswas'));
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
        $request->validate([
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'kategori' => 'required',
            'kelas' => 'required',
            'indikator' => 'required',
        ]);
    
        Indikator::create($request->all());
    
        return redirect()->back()->with('success', 'Indikator created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, Indikator $indikator)
    {
        $request->validate([
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'kategori' => 'required',
            'kelas' => 'required',
            'indikator' => 'required',
        ]);
    
        $indikator->update($request->all());
    
        return redirect()->with('success','Indikator updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indikator $indikator)
    {
        $indikator->delete();
    
        return back()->with('success','Indikator deleted successfully');
    }
}
