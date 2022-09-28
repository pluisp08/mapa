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
                            <th>Grupo</th>
                            <th>Utilidad %</th>
                            <th>Fecha Creacion</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>


                        
                        @foreach ($grupos as $grupo)
                        <tr>
                            <td>{{$grupo->id}}</td>
                            <td>{{$grupo->nombre}}</td>
                            <td>{{$grupo->utilidad}}</td>
                            <td>{{date('d-m-Y', strtotime($grupo->creado))}}</td>
                            <td><a href="/grupos/editar"><i class="fa fa-pencil" aria-hidden="true" title="Editar"></i></a></td>
                           

                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Id</th>
                            <th>Grupo</th>
                            <th>Utilidad %</th>
                            <th>Fecha Creacion</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </tfoot>
                </table>
                <a href="{{url('/grupos/create')}}" class="btn btn-primary btn-small">Nuevo Grupo</a>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
</section>

@endsection