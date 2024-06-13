<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan form ganti password
    public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }

    // Method untuk mengganti password
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Memeriksa apakah password lama cocok
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        // Memperbarui password pengguna
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password changed successfully');
    }
}
