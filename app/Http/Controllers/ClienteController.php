<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function index(){
        return view('/menu/menu');

    }

    //es una vista
    public function create(){
        

        return view('/clientes/registrarClientes');

    }

    //es un proceso

    public function store(Request $request){
       // dd($request->all());

       $cliente=new Cliente();

       $cliente->username=$request->username;
       $cliente->nombre=$request->nombre;
       $cliente->apellidos=$request->apellidos;
       $cliente->email=$request->email;
       $cliente->password=Hash::make($request->password);
       $cliente->imagen='cliente_default.png';

       $cliente->save();
       

        return view('/clientes/login');

    }


}
