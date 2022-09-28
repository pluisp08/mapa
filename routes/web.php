<?php

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
Route::resource('productos',ProductosController::class);

/*Route resource para Tasas */
Route::resource('tasas',TasasController::class);

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

