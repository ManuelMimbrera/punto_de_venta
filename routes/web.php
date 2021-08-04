<?php

use App\Http\Controllers\CajaController;
use App\Http\Controllers\ReportesController;
use App\Http\Livewire\CajaAperturaTable;
use App\Http\Livewire\CajaTable;
use App\Http\Livewire\CategoriasEditTable;
use App\Http\Livewire\CategoriasTable;
use App\Http\Livewire\ClientesEdit;
use App\Http\Livewire\ClientesTable;
use App\Http\Livewire\ContarTable;
use App\Http\Livewire\HistorialTable;
use App\Http\Livewire\ProductoEditTable;
use App\Http\Livewire\ProductoTable;
use App\Http\Livewire\UsuariosEdit;
use App\Http\Livewire\UsuariosTable;
use App\Http\Livewire\VentasTable;
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
    return view('home');
})->name('inicio');
Route::get('/Aviso-de-privacidad', function () {
    return view('aviso-privacidad');
});
Route::get('/Contacto', function () {
    return view('contac');
});
Route::get('/Nosotros', function () {
    return view('nosotros');
});


//Ruta de Clientes 

Route::get('/Clientes', ClientesTable::class)->middleware(['auth', 'verificar_rol2'])->name('cliente.show');
Route::get('/Clientes/{id}', ClientesEdit::class)->middleware(['auth', 'verificar_rol2'])->where('id', '[0-9]+')->name('cliente.edit');
Route::get('/Clientes/new', ClientesEdit::class)->middleware(['auth', 'verificar_rol2'])->name('cliente.register');
Route::get('/Clientes/eliminar/{ideliminar}', ClientesEdit::class)->middleware(['auth', 'verificar_rol2'])->where('id', '[0-9]+')->name('cliente.delete');

//Ruta de Producto 
Route::get('/Productos', ProductoTable::class)->middleware(['auth', 'verificar_rol2'])->name('productos');
Route::get('/Productos/{id}', ProductoEditTable::class)->middleware(['auth', 'verificar_rol2'])->where('id', '[0-9]+')->name('producto.edit');
Route::get('/Producto/new', ProductoEditTable::class)->middleware(['auth', 'verificar_rol2'])->name('producto.new');
Route::get('/Productos/Eliminar/{ideliminar}', ProductoEditTable::class)->middleware('auth')
    ->where('ideliminar', '[0-9]+')->name('producto.elim');
Route::get('/Productos/Confirmar/{id}', ProductoTable::class)->middleware(['auth', 'verificar_rol2'])
    ->where('ideliminar', '[0-9]+')->name('producto.conf');
//Ruta de Categoria
Route::get('/Categorias', CategoriasTable::class)->middleware(['auth', 'verificar_rol2'])->name('categorias');
Route::get('/Categoria/{id}', CategoriasEditTable::class)->middleware(['auth', 'verificar_rol2'])->where('id', '[0-9]+')->name('categoria.edit');
Route::get('/Categoria/new', CategoriasEditTable::class)->middleware(['auth', 'verificar_rol2'])->name('categoria.new');
Route::get('/Categoria/Eliminar/{ideliminar}', CategoriasEditTable::class)->middleware(['auth', 'verificar_rol2'])
    ->where('ideliminar', '[0-9]+')->name('categoria.elim');
Route::get('/Categoria/Confirmar/{id}', CategoriasTable::class)->middleware(['auth', 'verificar_rol2'])
    ->where('ideliminar', '[0-9]+')->name('categoria.conf');

    //Ruta de Usuarios
    Route::get('/Usuarios', UsuariosTable::class)->middleware(['auth', 'verificar_rol'])->name('usuarios');
    Route::get('/Usuarios/{id}', UsuariosEdit::class)->
    middleware(['auth', 'verificar_rol'])->where('id', '[0-9]+')->name('usuarios.edit');
    Route::get('/Usuarios/new', UsuariosEdit::class)->middleware('verified')->name('usuarios.register');
    Route::get('/Usuarios/Eliminar/{ideliminar}', UsuariosEdit::class)->middleware(['auth', 'verificar_rol'])
        ->where('ideliminar', '[0-9]+')->name('usuarios.delete');

        Route::get('/Venta',VentasTable::class)->middleware('auth')->name('ventas');

            //Ruta caja
    Route::get('/Caja', CajaTable::class)->middleware(['auth', 'verificar_rol2'])->name('caja-form');
    //Ruta de Apertura de caja
    Route::get('/Apertura-de-caja', CajaAperturaTable::class)->middleware(['auth', 'verificar_rol2'])->name('caja.apertura');
    Route::get('/Apertura-de-caja-edit/{id}', CajaAperturaTable::class)->middleware(['auth', 'verificar_rol2'])->where('id', '[0-9]+')->name('apertura.edit');
    Route::get('/Caja/Eliminar/{ideliminar}', CajaAperturaTable::class)->middleware(['auth', 'verificar_rol2'])
    ->where('ideliminar', '[0-9]+')->name('caja.delete');

    //Reportes
    Route::get('/Reportes/Caja', [CajaController::class, 'CajaReporte'])->middleware(['auth', 'verificar_rol2'])->name('caja.reporte');
    Route::get('/Reportes/Productos', [ReportesController::class,'ReporteProductos'])
    ->middleware('auth')
    ->name('reporte.ventas');
    
    //Historial
    Route::get('/Historial', HistorialTable::class)
    ->middleware(['auth', 'verificar_rol2'])
    ->name('historial.show');
       
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', ContarTable::class, function () {
    return view('dashboard');
})->name('dashboard');

