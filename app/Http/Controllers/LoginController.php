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

        $credentials = [
            'email' => $request->email,
            'password'=>$request->password
        ];
        // $request->only('sim', 'password');


        $remember = $request->has('remember');

        $validasi = Auth::attempt($credentials , $remember, User::class);


        $user = Auth::user();
        if ($validasi) {
            return redirect()->intended('user');
        } else {
            return redirect()->route('login')->with('failed', 'email atau password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
