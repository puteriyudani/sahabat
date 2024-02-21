<?php

namespace App\Http\Controllers;

use App\Models\Breakfast;
use Illuminate\Http\Request;

class BreakfastController extends Controller
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
            'kudapanpagi' => 'required',
            'keterangan' => 'required',
        ]);
    
        Breakfast::create($request->all());
    
        return redirect()->back()->with('success', 'Breakfast created successfully.');
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
    public function edit(Breakfast $breakfast)
    {
        dd($breakfast);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Breakfast $breakfast)
    {
        $request->validate([
            'kelas' => 'required',
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'kudapanpagi' => 'required',
            'keterangan' => 'required',
        ]);
    
        $breakfast->update($request->all());
    
        return redirect()->with('success','Breakfast updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breakfast $breakfast)
    {
        $breakfast->delete();
    
        return back()->with('success','Breakfast deleted successfully');
    }
}
