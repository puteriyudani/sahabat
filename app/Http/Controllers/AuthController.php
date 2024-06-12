<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nohp' => 'required|unique:users',
            'password' => 'required',
            'confirmpassword' => 'required|same:password',
            'level' => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk file gambar
        ]);

        $input = $request->all();

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

        // Hash password sebelum disimpan
        $input['password'] = Hash::make($input['password']);

        User::create($input);

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'nohp' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['nohp' => $request->nohp, 'password' => $request->password])) {
            // Simpan nama pengguna dalam sesi
            $request->session()->put('name', Auth::user()->name);

            if (Auth::user()->level == 'admin') {
                return redirect()->route('admin');
            } else if (Auth::user()->level == 'guru') {
                return redirect()->route('teacher.index');
            } else if (Auth::user()->level == 'keuangan') {
                return redirect()->route('keuangan');
            } else {
                return redirect()->route('register');
            }
        } else {
            return back()->withErrors([
                'password' => 'Wrong nohp or password',
            ]);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
