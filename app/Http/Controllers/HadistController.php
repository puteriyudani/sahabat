<?php

namespace App\Http\Controllers;

use App\Models\Hadist;
use Illuminate\Http\Request;

class HadistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hadists = Hadist::paginate(5);
        return view('guru.kelola.islamic.hadist.index', compact('hadists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.kelola.islamic.hadist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hadist' => 'required'
        ]);

        Hadist::create($request->all());

        return redirect()->route('hadist.index')->with('success', 'Hadist created successfully.');
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
    public function edit(Hadist $hadist)
    {
        return view('guru.kelola.islamic.hadist.edit', compact('hadist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hadist $hadist)
    {
        $request->validate([
            'hadist' => 'required'
        ]);

        $hadist->update($request->all());

        return redirect()->route('hadist.index')->with('success','Hadist updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hadist $hadist)
    {
        $hadist->delete();

        return back()->with('success','Hadist deleted successfully');
    }
}
