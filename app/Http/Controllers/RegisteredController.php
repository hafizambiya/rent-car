<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredController extends Controller
{
    public function index()
    {
        return view('user')->with(['user' => Auth::user(),]);
    }
}
