<?php

use App\Http\Controllers\ClienteAuthController;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PlatilloController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('clientes/index');
});

//vista para admin crear platillo
Route::GET('/admin/guardar',[PlatilloController::class,'guardar']);
//VISTA PARA EL LLAMAR DESDE EL FORM FUNCION CREAR 
Route::POST('/admin/crear',[PlatilloController::class,'crear']);
//Ruta para ver los platillso desde administrador 
Route::GET('/admin/verPlatillos',[PlatilloController::class,'index']);
//vistas solamente para calar 

//vista de pruebas -
//route::view('/admin/adminEditar','/admin/adminEditar');
//administradores editar vista
Route::GET('/admin/editar/{id}', [PlatilloController::class, 'editar']);
//menu
Route::PUT('/admin/update/{id}', [PlatilloController::class, 'update']);
//Eliminar VISTA 
Route::GET('/admin/borrar/{id}',[PlatilloController::class,'borrar']);
//FUNCION DE ELIMINAR
Route::DELETE('/admin/eliminar/{id}',[PlatilloController::class,'Eliminar']);


//login
//route::view('/login', '/clientes/login');
//route::view('/registrar', '/clientes/registrarClientes');
route::get('cliente/crear',[ClienteController::class,'create']);

route::post('/cliente/guardar',[ClienteController::class,'store']);

Route::get('cliente/menu', [ClienteController::class,'index' ]);


route::get('cliente/login', [ClienteAuthController::class,'showForm'])->name('login');
Route::post('/cliente/login',[ClienteAuthController::class, 'login'] ) ;
Route::post('/cliente/logout',[ClienteAuthController::class, 'logout'] );   



//rutas que solo puede acceder el usuario 

Route::middleware(['auth:cliente'])->group(function(){
    route::view('/menu','/menu/menu');
    route::view('/carrito','/clientes/Carrito');
});

