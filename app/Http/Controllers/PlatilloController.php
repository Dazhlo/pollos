<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{  
   //funcion para retornar la vista del admin agreagar platrillos
        public function guardar()
        {
         return view('/admin/agregarPlatillos');

        }
    public function index()
    {
        $Platillos = Platillo::all();
        return view('/admin/verPlatillos')-> with('Platillos',$Platillos);
    }


        public function crear(Request $request)
    {
         try
         {
           $Platillo = new Platillo();
            $Platillo->nombre_platillo= $request->nombre;
            $Platillo->detalle_platillo = $request->detalles;
            $Platillo->stock=$request->stock;
            $Platillo->precio_unitario = $request->precio;
            $Platillo->platillo_imagen = 'Platillo_default.png'; // Corregido el nombre de la imagen
            
            if($request->hasFile('platillo_imagen'))
            {
                $img = $request->file('platillo_imagen');
                $nuevo = 'cliente_1_' . $Platillo->id . '.' . $img->extension();
                $ruta = $img->storeAs('Platillo/clientes', $nuevo, 'public');
                $ruta = 'storage/' . $ruta;
                $Platillo->imagen = asset($ruta);
                $Platillo->save();
            }
         $Platillo->save();
         return  redirect('/admin/guardar');

          }catch(\Exception $e)
         {
             return back()->withErrors([
             'error' => 'Error numero: ' . $e->getMessage(),
            ])->withInput();
         }


    }
          
   public function mostrar($id)
   {
    $Platillo = Platillo::all();
    $Platillo = Platillo::find($id);
    return view('');

   }







}
