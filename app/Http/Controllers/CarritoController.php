<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function productosCarrito()
    {

        return view('/menu/Carrito')->with('productosCarrito',\Cart::getContent());
    }


      public function carritoAgregar(Request $request)
      {
          
          $request->validate([
              'id' => 'required',
              'nombre_platillo' => 'required|string',
              'detalle_platillo' => 'required|string',
              'platillo_imagen' => 'required|string'
          ]);
      
     //   dd($request);
          \Cart::add(array(
              'id' => $request->id,
              'name' => $request->nombre_platillo,  
              'price' => $request->detalle_platillo,
              'quantity' => 1, 
              'attributes' => array(
                  'image' => $request->platillo_imagen
              )
          ));
          return redirect('/Carrito/productos');
       
      }
      


}





