<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnCallback;

class ProductosController extends Controller
{
   

public function index() 
{
return view('productos.index');
}

public function create() 
{
    return view('productos.create');
}


public function store(Request $request) 
{
$productos = request()->all();



//return response()->json($productos);
}



}
