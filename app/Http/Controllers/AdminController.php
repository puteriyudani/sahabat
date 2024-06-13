<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        return view('admin.index', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'nohp' => 'required|unique:users,nohp,' . $user->id,
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk file gambar
        ]);

        $input = $request->only(['name', 'nohp']); // Hanya ambil 'name' dan 'nohp' dari input

        if ($request->hasFile('image')) {
            $imageData = [];

            foreach ($request->file('image') as $key => $file) {
                $destinationPath = 'public/images';
                $image_name = date('YmdHis') . '-' . $key . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs($destinationPath, $image_name);

                $imageData[] = $image_name;
            }

            // Simpan hanya satu nama file gambar ke dalam kolom 'image' di model User
            $input['image'] = $imageData[0]; // Ambil hanya nama file pertama dari array
        }

        $user->update($input);

        return redirect()->route('admin')->with('success', 'Profile updated successfully');
    }
}
