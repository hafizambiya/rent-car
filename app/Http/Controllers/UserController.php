<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function registrasi_proses(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'sim' => 'required',

    ]);

    $user = New User;
    $user->nama = $request->nama;
    $user->alamat = $request->alamat;
    $user->no_hp = $request->no_hp;
    $user->sim = $request->sim;
    $user->password = bcrypt($request->password);
    $user->save();




    return redirect('login')->with('status', 'Registrasi berhasil!');
}
}
