<?php

namespace App\Http\Controllers;

use App\Models\Bahanajar;
use Illuminate\Http\Request;

class BahanajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahanajars = Bahanajar::get();
        return view('bahanajar.index', compact('bahanajars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bahanajar.create');
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
    public function edit(string $id)
    {
        return view('bahanajar.edit', compact('bahanajar'));
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
