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

    ]);

    $user = New User;
    $user->nama = $request->nama;
    $user->email = $request->email;
    $user->alamat = $request->alamat;
    $user->no_hp = $request->no_hp;
    // $user->sim = $request->sim;
    $user->password = bcrypt($request->password);
    // dd($request->password);
    // $user->password = Hash::make('ambiya');
    $user->save();




    return redirect('login')->with('status', 'Registrasi berhasil!');
}
}
