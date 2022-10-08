<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Impuesto;
use App\Models\Producto;
use App\Models\Tasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnCallback;

class ProductosController extends Controller
{


    public function index()
    {
        $productos = Producto::all();
        return view('productos.index',compact('productos'));
    }

    public function create()
    {


        /* Capturo la ultima tasa */
        $tasas = DB::table('tasas')->max('tasa');

        /*Capturando Grupos de Productos*/
        $grupos = Grupo::all();

        //Captura los impuestos existentes
        $impuestos = Impuesto::all();

        return view('productos.create', compact('tasas', 'grupos','impuestos'));
    }


    public function store(Request $request)
    {




        $productos = new Producto();
        $productos->nombre = $request->nombre;
        $productos->costo_bolivar = $request->costo_bolivar;
        $productos->costo_dolar = $request->costo_dolar;
        $productos->precio = $request->precio;
        $productos->grupo_id = $request->grupo_id;
        $productos->impuesto_id = $request->impuesto_id;
        $productos->creado = date('Y-m-d', $request->created_at);
        $productos->modificado = date('Y-m-d',$request->updated_at);

        $productos->save();

        return redirect('productos')->with('success','Producto guardado exitosamente...');

        //return response()->json($productos);
    }

    public function utilidad($grupo)
    {
        $porcentaje = Grupo::find($grupo);

        //return response()->json($porcentaje);

        return view('productos.utilidad', compact('porcentaje'));
    }

    public function impuestos($impuestos)
    {
        $porcImpuesto = Impuesto::find($impuestos);

        //return response()->json($porcentaje);

        return view('productos.impuestos', compact('porcImpuesto'));
    }

    public function precio($cost,$imp,$u)
    {
        $utilidad = ($u/100)+1;

        if($imp == 1){
            $prec = $cost * $utilidad;
            $precio = round($prec,2);
        }else{
            $impuesto = ($imp/100)+1;
            $prec = $cost * $utilidad;
            $precio = round($prec,2);

        }
       
        
//return response()->json($impuesto);


        return view('productos.precio', compact('precio'));
    }
}
