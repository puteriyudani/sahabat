<?php

namespace App\Http\Controllers;

use App\Models\Penutup;
use App\Models\Penutupbaby;
use Illuminate\Http\Request;

class PenutupController extends Controller
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
            'doa' => 'required',
            'bab' => 'required',
        ]);
    
        Penutup::create($request->all());
    
        return redirect()->back()->with('success', 'Penutup created successfully.');
    }

    public function storebaby(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'doa' => 'required',
            'snack' => 'required',
            'bab' => 'required',
            'tidur' => 'required',
            'minumsusu' => 'required',
        ]);
    
        Penutupbaby::create($request->all());
    
        return redirect()->back()->with('success', 'Penutup created successfully.');
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