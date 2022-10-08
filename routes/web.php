<?php

use App\Http\Controllers\GruposController;
use App\Http\Controllers\ImpuestosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\TasasController;
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

//Pagina Inicial
Route::get('/', function () {
    return view('index');
});

/*Route resource para Productos */
//Route::resource('productos',ProductosController::class);

//Index de Producto
Route::get('productos',[ProductosController::class,'index'])->name('productos.index');

//Formulario de crear de Producto
Route::get('productos/create',[ProductosController::class,'create'])->name('productos.create');

//Formulario editar Producto
Route::get('productos/{id}/edit',[ProductosController::class,'edit'])->name('productos.edit');

//Guardar Producto
Route::post('productos',[ProductosController::class,'store'])->name('productos.store');

//Ver Producto
Route::get('productos/{id}',[ProductosController::class,'show'])->name('productos.show');

//Guardar edicion producto
Route::patch('productos/{id}',[ProductosController::class,'update'])->name('productos.update');

//borrar producto
Route::delete('productos/{id}',[ProductosController::class,'destroy'])->name('productos.destroy');

//Cargar impuesto por el id del impuesto seleccionado
Route::get('productos/impuestos/{impuestos}',[ProductosController::class,'impuestos'])->name('productos.impuestos');

//Cargar utilidad por el id del grupo seleccionado
Route::get('productos/utilidad/{grupo}',[ProductosController::class,'utilidad'])->name('productos.utilidad');


//Cargar precio total con iva del producto del grupo de producto
Route::get('productos/precioiva/{grupo}/{impuesto}/{utilidad}',[ProductosController::class,'precioiva'])->name('productos.precioiva');

//Cargar precio total exento del producto del grupo de producto
Route::get('productos/precioexento/{grupo}/{utilidad}',[ProductosController::class,'precioexento'])->name('productos.precioexento');




//Index de Impuestos
Route::get('impuestos',[ImpuestosController::class,'index'])->name('impuesto.index');

//Formulario de nuevo de Impuestos
Route::get('impuestos/create',[ImpuestosController::class,'create'])->name('impuesto.create');

//Guardar Impuestos
Route::post('impuestos',[ImpuestosController::class,'store'])->name('impuesto.store');








/*Route resource para Tasas */
Route::resource('tasas',TasasController::class);

/*Route resource para Grupos */
Route::resource('grupos',GruposController::class);

/*Route::get('/', function () {
    return view('welcome');
});*/



/* Index Productos 
Route::get('/productos', function () {
    return view('productos.index');
});

/*Crear Nuevo Producto 
Route::get('/productos/nuevo', function () {
    return view('productos.create');
});

/* Guardar producto 
Route::post('/productos', function () {
    return view('productos.store');
});

/*Editar Producto 
Route::patch('/productos/editar/{id}', function () {
    return view('productos.edit');
});

/*Auxiliar codigo de barras al Producto 
Route::get('/productos/auxiliar', function () {
    return view('productos.auxiliar');
});

*/


Route::get('/usuarios', function () {
    return view('usuarios.login');
});

