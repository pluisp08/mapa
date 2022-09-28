@extends('app-data');
@section('content')
<main class="p-y-1">
    <div class="container">
        <div class="row">


        <div class="col-md-2">
               
            </div>

            <div class="col-md-8">
                <h2 class="m-b-2">Formulario Grupos</h2>


                <form action="{{url('/grupos')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label">Nombre del Grupo</label>
                        <div class="col-md-8">  
                            <input class="form-control" type="text" id="nombre" name="nombre"  data-toggle="tooltip" data-placement="top" placeholder="Nombre del Grupo.." title="Tasa del Dolar...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="utilidad" class="col-md-4 col-form-label">Porcentaje de Utilidad</label>
                        <div class="col-md-8">  
                            <input class="form-control" type="number" step="0.01" id="utilidad" name="utilidad"  data-toggle="tooltip" data-placement="top" placeholder="Porcentaje de Utilidad %" title="Tasa del Dolar...">
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-secondary">Limpiar</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-2">
               
            </div>

        </div>
    </div>
</main>
@endsection