<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class KindergartenController extends Controller
{
    public function arrival()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.arrival', compact('siswas'));
    }

    public function learning1()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.learning1', compact('siswas'));
    }

    public function learning2()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.learning2', compact('siswas'));
    }

    public function breakfast()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.breakfast', compact('siswas'));
    }

    public function playingtime()
    {
        $siswas = Siswa::where('kelompok', 'kindergarten')->get();
        return view('kindergarten.playingtime', compact('siswas'));
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
