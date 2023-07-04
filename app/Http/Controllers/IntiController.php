<?php

namespace App\Http\Controllers;

use App\Models\Inti;
use App\Models\Intibaby;
use Illuminate\Http\Request;

class IntiController extends Controller
{
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
            'kelas' => 'required',
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'inti' => 'required',
        ]);
    
        Inti::create($request->all());
    
        return redirect()->back()->with('success', 'Inti created successfully.');
    }

    public function storebaby(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'inti' => 'required',
            'kudapansiang' => 'required',
            'keterangan' => 'required',
        ]);
    
        Intibaby::create($request->all());
    
        return redirect()->back()->with('success', 'Inti created successfully.');
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
