<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;

class ClienteAuthController extends Controller
{
    public function showForm(){
        return view('/clientes/login');
    }
    
    public function login(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

       
 
        if (Auth::guard('cliente')->attempt([
            'username' => $request ->username,
            'password' => $request -> password,
        ])) {
            $request->session()->regenerate();
 
            return redirect()->intended('/menu');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');


    }

    public function logout(Request $request){

        Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('cliente/login');

        
    }

}
