<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registrasi_proses(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        // 'sim' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|confirmed',

    ]);

    $user = New User;
    $user->nama = $request->nama;
    $user->email = $request->email;
    $user->alamat = $request->alamat;
    $user->no_hp = $request->no_hp;
    $user->password = bcrypt($request->password);
    $user->save();

    return redirect('login')->with('status', 'Registrasi berhasil!');
}
}
