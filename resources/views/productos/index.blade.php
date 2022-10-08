@extends('app-data')
@section('content')
<section class="nosotros p-y-1">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
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
                        
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->costo_bolivar}}</td>
                            <td>{{$producto->costo_dolar}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->grupos->nombre}}</td>
                            <td>{{$producto->impuestos->impuesto}}</td>
                            <td><a href="/productos/{{$producto->id}}/editar"><i class="fa fa-pencil" aria-hidden="true" title="Editar"></i></a></td>
                            <td></td>
                        </tr>
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
                <a href="{{url('/productos/create')}}" class="btn btn-primary btn-small">Nuevo Producto</a>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</section>

@endsection