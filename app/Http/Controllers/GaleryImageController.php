<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\GaleryImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Galery $galery, User $user)
    {
        $galeryImages = GaleryImage::where('galery_id', $galery->id)->get();
        return view('galery-images.index', compact('galery', 'galeryImages', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Galery $galery, User $user)
    {
        return view('galery-images.create', compact('galery', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Galery $galery)
    {
        // Validasi gambar
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $imageData = [];
        if ($files = $request->file('images')) {
            foreach ($files as $key => $file) {
                $destinationPath = 'public/images';
                $extension = $file->getClientOriginalExtension();
                $filename = $key . '-' . time() . '.' . $extension;

                // Menyimpan file ke storage
                $path = $file->storeAs($destinationPath, $filename);

                $imageData[] = [
                    'galery_id' => $galery->id,
                    'image' => $filename,  // Menyimpan path file saja
                ];
            }
        }

        // Menyimpan data ke database
        GaleryImage::insert($imageData);

        return redirect()->route('galery-image.index', $galery)->with('success', 'Uploaded Successfully');
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
    public function destroy(int $productImageId)
    {
        $productImage = GaleryImage::findOrFail($productImageId);
        if(File::exists($productImage->image)){
            File::delete($productImage->image);
        }
        $productImage->delete();

        return redirect()->back()->with('status', 'Image Deleted');
    }
}
