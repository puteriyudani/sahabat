<?php

namespace App\Http\Controllers;

use App\Models\Catatanguru;
use App\Models\Catatanorangtua;
use Illuminate\Http\Request;

class CatatanGuruController extends Controller
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
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'catatan' => 'required',
        ]);
    
        Catatanguru::create($request->all());
    
        return redirect()->back()->with('success', 'Catatan created successfully.');
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
    public function update(Request $request, Catatanguru $catatanguru)
    {
        $request->validate([
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'catatan' => 'required',
        ]);
    
        $catatanguru->update($request->all());
    
        return redirect()->with('success','Catatan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catatanguru $catatanguru)
    {
        $catatanguru->delete();
    
        return back()->with('success','Catatan deleted successfully');
    }

    public function destroyorangtua(Catatanorangtua $catatanorangtua)
    {
        $catatanorangtua->delete();
    
        return back()->with('success','Catatan deleted successfully');
    }
}
