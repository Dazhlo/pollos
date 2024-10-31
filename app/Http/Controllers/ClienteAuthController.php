<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteAuthController extends Controller
{
    
    public function login(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt([
            'username' => $request ->username,
            'password' => $request -> password,
        ])) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }

    public function logout(Request $request){

        
    }

}
