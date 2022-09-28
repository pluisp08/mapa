<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnCallback;

class ProductosController extends Controller
{


    public function index()
    {
        return view('productos.index');
    }

    public function create()
    {
        
        $tasas = DB::table('tasas')->max('tasa');


       return view('productos.create',compact('tasas'));
    }


    public function store(Request $request)
    {

        
        $productos = request()->all();

        $productos = $request->except('_token');

        return response()->json($productos);
    }
}
