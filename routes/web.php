<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\UserController;
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
Route::GET('/menu/admin',[AdminAuthController::class,'menuAdmin']);
//route::view('/menu','/menu/menu');
Route::GET('/menu',[PlatilloController::class,'menuVer']);
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
//vista de pruebas 
//Route::view('/menu/detalles','/menu/detallesMenu');
Route::GET('/menu/detalles/{id}',[PlatilloController::class,'detalles']);

//login de administradores
Route::GET('/login/Admin',[AdminAuthController::class,'showLoginAdmin'])->name('login');
//login
Route::POST('/admin/iniciar',[AdminAuthController::class],'login');


//vista de crear
Route::GET('/admin/crear',[UserController::class,'create']);
//Funcion de guardar
Route::POST('/admin/guardar',[UserController::class,'crear']);

Route::POST('/admin/logout',[AdminAuthController::class,'logoutAdmin']);


