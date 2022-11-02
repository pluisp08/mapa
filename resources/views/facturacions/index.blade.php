@extends('app-data')
@section('content')
<section class="nosotros p-y-1">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8">
                <table id="productos" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Costo Bs</th>
                            <th>Costo $</th>
                            <th>Precio</th>
                            <th>Grupo</th>
                            <th>Impuesto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($productos as $producto)
                        <form action="">
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->costo_bolivar}}</td>
                            <td>{{$producto->costo_dolar}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->grupos->nombre}}</td>
                            <td>{{$producto->impuestos->impuesto}}</td>
                            <td>
                               
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm"></span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                
                            </td>
                            <td><a href="/productos/agregar/{{$producto->id}}" title="agregar"><i class="fa fa-plus" aria-hidden="true"></i></a></td>

                        </tr>
                        </form>
                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Costo Bs</th>
                            <th>Costo $</th>
                            <th>Precio</th>
                            <th>Grupo</th>
                            <th>Impuesto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
            
        
        </div>

        </div>
    </div>
</section>

@endsection