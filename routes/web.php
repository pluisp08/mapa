<?php

use App\Http\Controllers\ProductosController;
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
    return view('welcome');
});

//Index de productos-Pagina Inicial
Route::get('/productos', function () {
    return view('productos.index');
});


Route::get('/usuarios', function () {
    return view('usuarios.login');
});

