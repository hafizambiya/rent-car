<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
     public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();

     }

     public function handleGoogleCallback(){
        try{
            $user = Socialite::driver('google')->user();

            $finduser = User::where('email', $user->email)->first();
            // dd($finduser);

            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('user');
            }else{
                $newUser = User::updateOrCreate(['email'=>$user->email],[
                    'nama' => $user->name,
                    'google_id' => $user->id,
                    'password' => bcrypt('password')
                ]);

                Auth::login($newUser);
                return redirect()->intended('user');
            }

        } catch(Exception $e){
            dd($e->getMessage());
        }
     }
}
