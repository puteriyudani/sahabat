<?php

namespace App\Http\Controllers;

use App\Models\Doa;
use Illuminate\Http\Request;

class DoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doas = Doa::paginate(5);
        return view('guru.kelola.islamic.doa.index', compact('doas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.kelola.islamic.doa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'doa' => 'required'
        ]);

        Doa::create($request->all());

        return redirect()->route('doa.index')->with('success', 'Doa created successfully.');
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
    public function edit(Doa $doa)
    {
        return view('guru.kelola.islamic.doa.edit', compact('doa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doa $doa)
    {
        $request->validate([
            'doa' => 'required'
        ]);

        $doa->update($request->all());

        return redirect()->route('doa.index')->with('success','Doa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doa $doa)
    {
        $doa->delete();

        return back()->with('success','Doa deleted successfully');
    }
}
