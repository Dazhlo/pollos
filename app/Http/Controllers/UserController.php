<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){

        return view ('/admin/crearAdmin');

    }

 


    public function crear(Request $request)
    {
       // try {
            $User = new User();
            
            $User->nombres = $request->nombre;
            $User->apellidos = $request->apellidos;
            $User->username = $request->email;
            $User->imagen = 'User_default.png'; // Corregido el nombre de la imagen
            $User->password = Hash::make($request->contreaseña);
    
            if ($request->hasFile('imagen1')) {
                $img = $request->file('imagen1');
                $nuevo = 'User_1_' . $User->id . '.' . $img->extension();
                $ruta = $img->storeAs('perfil/Users', $nuevo, 'public');
                $ruta = 'storage/' . $ruta;
                $User->imagen = asset($ruta);
            }
    
            $User->save();
            Auth::login($User);
            return redirect('/admin/verPlatillos');
        // } catch (\Exception $e) {
        //     return back()->withErrors([
        //         'error' => 'Ocurrió un error: ' . $e->getMessage(),
        //     ])->withInput();
        // }
    }
    
    public function editar($id)
    {
        try {
            $User = User::findOrFail($id);
            return view('/Users/editar')->with('User', $User);
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => 'Ocurrió un error: ' . $e->getMessage(),
            ]);
        }
    }
    
      
      public function update(Request $request,$id){
        //dd($request ->all());
        try {
          $User =User::all();
          $User = User::find($id);
         $User->nombre=$request ->nombre;
         $User->apellidos =$request -> apellidos;
          $User->username = $request ->email;
          $User->imagen = $request ->imagen1;
          $User->password =Hash::make($request->contreaseña);
        
          if ($request->hasFile('imagen1')) {
           $img = $request->file('imagen1');
           $nuevo = 'User_1_' . $User->id . '.' . $img->extension();
           $ruta = $img->storeAs('perfil/Users', $nuevo, 'public');
           $ruta='storage/'.$ruta;
           $User->imagen = asset($ruta);
        }
      } catch (\Exception $e) {
        return back()->withErrors([
                'error' => 'Ocurrió un error: ' . $e->getMessage(),
            ])->withInput();
        
      }
      
      $User->save();
      return redirect('/admin/ver');
      
      
      
      
      
      
      }
      public function borrar($id){
        $User =User::all();
         $User =User::find($id);
        return view('/Users/borrar')->with('User',$User);
      
      }
      
       public function mostar($id){
        $User =User::all();
         $User = User::find($id);
         return view('/User/mostrar')->with('User',$User);
       }
       public function eliminar($id){
        //dd($request ->all());
         $User = User::find($id);
        $User -> delete();
        return redirect('admin/ver');
      
      
      }
      



    




}
