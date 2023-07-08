<?php

namespace App\Http\Controllers;

use App\Models\Catatanorangtua;
use App\Models\Siswa;
use Illuminate\Http\Request;

class CatatanOrangtuaController extends Controller
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
    public function create($siswa, $tanggal)
    {
        // Dapatkan data siswa berdasarkan ID
        $siswa = Siswa::findOrFail($siswa);

        return view('orangtua.createcatatan', compact('siswa', 'tanggal'));
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
    
        Catatanorangtua::create($request->all());
    
        return redirect()->route('ortu.siswa')
                        ->with('success', 'Catatan created successfully.');
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
    public function update(Request $request, Catatanorangtua $catatanorangtua)
    {
        $request->validate([
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'catatan' => 'required',
        ]);
    
        $catatanorangtua->update($request->all());
    
        return redirect()->with('success','Catatan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catatanorangtua $catatanorangtua)
    {
        $catatanorangtua->delete();
    
        return back()->with('success','Catatan deleted successfully');
    }
}
