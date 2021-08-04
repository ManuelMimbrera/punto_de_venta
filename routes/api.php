<?php

use App\Http\Controllers\carritoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//cliente
Route::post('/lista_clientes', [ClienteController::class,'listar_clientes'])->middleware('auth:api');
Route::post('/guardar_clientes', [ClienteController::class,'guardar_clientes'])->middleware('auth:api');
Route::post('/elimina_clientes',[clienteController::class,'eliminar_clientes'])->middleware('auth:api');

//categoria
Route::post('/lista_categorias',[CategoriaController::class,'listar_categorias'])->middleware('auth:api');
Route::post('/guarda_categorias',[CategoriaController::class,'guardar_categorias'])->middleware('auth:api');//->middleware('auth:sanctum');
Route::post('/elimina_categorias',[CategoriaController::class,'eliminar_categorias'])->middleware('auth:api');//->middleware('auth:sanctum');

//producto
Route::post('/lista_productos',[ProductoController::class,'listar_productos'])->middleware('auth:api');
Route::post('/guardar_productos',[ProductoController::class,'guarda_productos'])->middleware('auth:api');
Route::post('/eliminar_productos',[productoController::class,'elimina_productos'])->middleware('auth:api');

//Login
Route::post('/login', [loginController::class,'sesion']);

//Venta
Route::post('/guardar_venta',[ventaController::class,'guarda_venta'])->middleware('auth:api');

/*CERRAR SESIÓN*/ 
Route::post('/logout',[loginController::class,'cerrar'])->middleware('auth:api');

/*CARRITO*/ 
Route::post('/guardar_opciones',[carritoController::class,'guarda_carrito'])->middleware('auth:api');
Route::post('/lista_opciones',[carritoController::class,'listar_carrito'])->middleware('auth:api');
Route::post('/eliminar_opciones',[carritoController::class,'elimina_carrito'])->middleware('auth:api');


Route::middleware('auth:passport')->get('/user', function (Request $request) {
    return $request->user();
});

