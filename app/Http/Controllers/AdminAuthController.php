<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
  public function menuAdmin(){

     return view('/admin/inicioAdmin');
  }  


    public function showLoginAdmin(){

        return view('/admin/adminLogin');
    }
    public function login (Request $request){

        if  (Auth::guard('User')->attempt([
             'username' => $request->username,
           'contraseña' => $request->contraseña,
           ])){
            $request->session()->regenerate();
   
   
             return redirect()->intended('/menu/admin');
           }
           $User = User::where('username', '=', $request->username)->first();
   
           if($User && Hash::check($request->contraseña, $User->contraseña)){
   
           Auth::guard('User')->login($User);
             $request->session()->regenerate();
   
             return redirect()->intended('/menu/admin');
   
   
           }
           return back()->withErrors([
             'username' => 'los datos proporcionados no se encuentran',
           ]);
         }
         
    public function logoutAdmin(Request $request){

        Auth::logout();
   
          $request->session()->invalidate();
       
          $request->session()->regenerateToken();
       
          return redirect('/');
  
      }




}
