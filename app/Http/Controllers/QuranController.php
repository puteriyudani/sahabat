<?php

namespace App\Http\Controllers;

use App\Models\Quran;
use Illuminate\Http\Request;

class QuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qurans = Quran::paginate(5);
        return view('guru.kelola.islamic.quran.index', compact('qurans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.kelola.islamic.quran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'quran' => 'required'
        ]);

        Quran::create($request->all());

        return redirect()->route('quran.index')->with('success', 'Quran created successfully.');
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
    public function edit(Quran $quran)
    {
        return view('guru.kelola.islamic.quran.edit', compact('quran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quran $quran)
    {
        $request->validate([
            'quran' => 'required'
        ]);

        $quran->update($request->all());

        return redirect()->route('quran.index')->with('success','Quran updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quran $quran)
    {
        $quran->delete();

        return back()->with('success','Quran deleted successfully');
    }
}
