<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class BreakfastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::get();
        return view('guru.kindergarten.breakfast.index', compact('siswas'));
    }

    public function individu()
    {
        return view('guru.kindergarten.breakfast.individu');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.activity.breakfast.create');
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
