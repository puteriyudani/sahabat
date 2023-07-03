<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class BabycampController extends Controller
{
    public function breakfast()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view('babycamp.breakfast', compact('siswas'));
    }

    public function pembuka()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view('babycamp.pembuka', compact('siswas'));
    }

    public function inti()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view('babycamp.inti', compact('siswas'));
    }

    public function penutup()
    {
        $siswas = Siswa::where('kelompok', 'babycamp')->get();
        return view('babycamp.penutup', compact('siswas'));
    }

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
