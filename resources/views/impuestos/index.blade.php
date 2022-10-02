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
                            <th>ID</th>
                            <th>Impuesto</th>
                            <th>Porcentaje</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($impuestos as $impuesto)
                        <tr>

                            <td>{{$impuesto->id}}</td>
                            <td>{{$impuesto->impuesto}}</td>
                            <td>{{$impuesto->porcentaje}}</td>

                            <td><a href="/impuestos/editar"><i class="fa fa-pencil" aria-hidden="true" title="Editar"></i></a></td>
                            <td><a href="/productos/auxiliar"><i class="fa fa-barcode" aria-hidden="true" title="Auxiliar Codigo de Barras"></i></a></td>

                        </tr>
                        @endforeach



                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Impuesto</th>
                            <th>Porcentaje</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
                <a href="{{url('/impuestos/create')}}" class="btn btn-primary btn-small">Nuevo Impuesto</a>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</section>

@endsection