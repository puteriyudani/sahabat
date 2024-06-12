<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\User;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $galerys = Galery::paginate(8);
        return view('galery.index', compact('galerys', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        return view('galery.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'detail' => 'required',
            'tanggal' => 'required',
            'link' => 'nullable',
        ]);

        Galery::create($request->all());

        return redirect()->route('galery.index')->with('success', 'Galery created successfully.');
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
    public function edit(Galery $galery, User $user)
    {
        return view('galery.edit', compact('galery', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'detail' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
        ]);

        $galery->update($request->all());

        return redirect()->route('galery.index')->with('success', 'Galery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        $galery->delete();

        return redirect()->route('galery.index')->with('success', 'Galery deleted successfully');
    }
}
