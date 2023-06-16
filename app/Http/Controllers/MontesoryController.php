<?php

namespace App\Http\Controllers;

use App\Models\Montesory;
use Illuminate\Http\Request;

class MontesoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $montesorys = Montesory::get();
        return view('montesory.index', compact('montesorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('montesory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Montesory $montesory)
    {
        return view('montesory.edit', compact('montesory'));
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
