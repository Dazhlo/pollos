<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Platillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PlatilloController extends Controller
{  
   //funcion para retornar la vista del admin agreagar platrillos
        public function guardar()
        {
         return view('/admin/agregarPlatillos');

        }
        public function menuVer()
        {
            $Platillo=Platillo::all();
           return view('/menu/menu')->with('Platillos',$Platillo);
         

        }
    public function index()
    {
        $Platillos = Platillo::all();
        return view('/admin/verPlatillos')-> with('Platillos',$Platillos);
    }


        public function crear(Request $request)
    {
        //  try
        //  {
           $Platillo = new Platillo();
            $Platillo->nombre_platillo= $request->nombre;
            $Platillo->detalle_platillo = $request->detalles;
            $Platillo->stock=$request->stock;
            $Platillo->precio_unitario = $request->precio;
            $Platillo->platillo_imagen = 'Platillo.png';//'Platillo_default.png'; // Corregido el nombre de la imagen
            
            if($request->hasFile('imagen1'))
            {
               $img = $request->file('imagen1');
                $nuevo = 'Platillo_1' . $Platillo->id . '.' . $img->extension();
                $ruta = $img->storeAs('Platillo/clientes', $nuevo, 'public');
                $ruta = 'storage/' . $ruta;
                $Platillo->platillo_imagen  = asset($ruta);
                $Platillo->save();
            }
         $Platillo->save();
         return  redirect('/admin/guardar');

        //   }catch(\Exception $e)
        //  {
        //      return back()->withErrors([
        //      'error' => 'Error numero: ' . $e->getMessage(),
        //     ])->withInput();
        //  }


    }
//LLamar a la vista y enviar el id 
public function editar($id)
{

    $Platillo = Platillo::find($id);
    if (!$Platillo) {
        
        return redirect()->back()->with('error', 'Platillo no encontrado');
    }
    return view('/admin/adminEditar')->with('Platillo', $Platillo);
}


    //funcion de actualizar

public function update(Request $request,$id)
{
    //$Platillo = Platillo::all();
    $Platillo = Platillo::find($id);
   $Platillo->nombre_platillo=$request->nombre;
   $Platillo->detalle_platillo=$request->detalles;
   $Platillo->stock=$request->stock;
   $Platillo->precio_unitario=$request->precio;
   $Platillo->platillo_imagen = 'Platillo.png';//'Platillo_default.png'; // Corregido el nombre de la imagen
   if($request->hasFile('imagen1'))
            {
               $img = $request->file('imagen1');
                $nuevo = 'Platillo_1' . $Platillo->id . '.' . $img->extension();
                $ruta = $img->storeAs('Platillo/clientes', $nuevo, 'public');
                $ruta = 'storage/' . $ruta;
                $Platillo->platillo_imagen  = asset($ruta);
                $Platillo->save();
            }

 $Platillo->save();
 return  redirect('/admin/verPlatillos');
}
          
   public function mostrar($id)
   {
   // $Platillo = Platillo::all();
    $Platillo = Platillo::find($id);
    return view('');

   }
public function borrar($id)
{
  // $Platillo=Platillo::all($id);
   $Platillo=Platillo::find($id);
   return view('/admin/adminEliminar')->with('Platillo',$Platillo);
}
public function Eliminar($id)
{
$Platillo=Platillo::find($id);
$Platillo-> delete();
return redirect('/admin/verPlatillos');
}
public function detalles($id){
    $Platillo=Platillo::find($id); 
    return view('/menu/detallesMenu')->with('Platillo',$Platillo);
}




}
