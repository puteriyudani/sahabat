<?php

namespace App\Http\Controllers;

use App\Models\Pembuka;
use App\Models\Pembukababy;
use Illuminate\Http\Request;

class PembukaController extends Controller
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
            'outdoor' => 'required',
            'circletime' => 'required',
            'doapembuka' => 'required',
        ]);
    
        Pembuka::create($request->all());
    
        return redirect()->back()->with('success', 'Pembuka created successfully.');
    }

    public function storebaby(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'circletime' => 'required',
            'surahpendek' => 'required',
        ]);
    
        Pembukababy::create($request->all());
    
        return redirect()->back()->with('success', 'Pembuka created successfully.');
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
    public function update(Request $request, Pembuka $pembuka)
    {
        $request->validate([
            'kelas' => 'required',
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'outdoor' => 'required',
            'circletime' => 'required',
            'doapembuka' => 'required',
        ]);
    
        $pembuka->update($request->all());
    
        return redirect()->with('success','Pembuka updated successfully');
    }

    public function updatebaby(Request $request, Pembukababy $pembukababy)
    {
        $request->validate([
            'kelas' => 'required',
            'tanggal' => 'required',
            'siswa_id' => 'required',
            'circletime' => 'required',
            'surahpendek' => 'required',
        ]);
    
        $pembukababy->update($request->all());
    
        return redirect()->with('success','Pembuka updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembuka $pembuka)
    {
        $pembuka->delete();
    
        return back()->with('success','Pembuka deleted successfully');
    }

    public function destroybaby(Pembukababy $pembukababy)
    {
        $pembukababy->delete();
    
        return back()->with('success','Pembuka deleted successfully');
    }
}
