<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        dd($credentials);

        $remember = $request->has('remember');

        $validasi = Auth::attempt($credentials , $remember, User::class);
        dd($validasi);


        $user = Auth::user();
        if ($validasi) {
            return redirect()->intended('user');
        } else {
            return redirect()->route('login')->with('failed', 'email atau password salah');
        }
    }
}
