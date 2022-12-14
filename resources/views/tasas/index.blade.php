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
                            <th>Id</th>
                            <th>Tasa</th>
                            <th>Fecha Creacion</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>


                        @if (isset($tasas))
                        @foreach ($tasas as $tasa)
                        <tr>
                            <td>{{$tasa->id}}</td>
                            <td>{{$tasa->tasa}}</td>
                            <td>{{date('d-m-Y', strtotime($tasa->creado))}}</td>
                            <td><a href="/tasas/editar"><i class="fa fa-pencil" aria-hidden="true" title="Editar"></i></a></td>
                           

                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Tasa</th>
                            <th>Fecha Creacion</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </tfoot>
                </table>
                <a href="{{url('/tasas/create')}}" class="btn btn-primary btn-small">Nueva Tasa</a>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</section>

@endsection