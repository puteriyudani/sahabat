<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        $abouts = About::where('user_id', $user->id)->get();
        return view('about.index', compact('abouts', 'user'));
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
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'pengantar' => 'required',
            'tgl_lahir' => 'required',
            'tpt_lahir' => 'required',
            'umur' => 'required',
            'pendidikan' => 'required',
            'nohp' => 'nullable',
            'email' => 'nullable',
            'kota' => 'required',
            'pekerjaan' => 'required',
            'tentang' => 'required',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'tiktok' => 'nullable',
            'image.*' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048', // Validasi untuk file gambar
        ]);

        // Prepare data to update
        $input = $request->only([
            'user_id',
            'nama',
            'pengantar',
            'tgl_lahir',
            'tpt_lahir',
            'umur',
            'pendidikan',
            'nohp',
            'email',
            'kota',
            'pekerjaan',
            'tentang',
            'twitter',
            'instagram',
            'facebook',
            'tiktok'
        ]);

        // Handle image upload if files are present
        if ($request->hasFile('image')) {
            $imageData = [];

            foreach ($request->file('image') as $key => $file) {
                $destinationPath = 'public/images';
                $image_name = date('YmdHis') . '-' . $key . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs($destinationPath, $image_name);

                $imageData[] = $image_name;
            }

            $input['image'] = $imageData[0]; // Ambil hanya nama file pertama dari array
        }

        // Update the About model with validated input
        $about->update($input);

        return redirect()->route('about.index')->with('success', 'About updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
