@extends('app-data');
@section('content')
<main class="p-y-1">
    <div class="container">
        <div class="row">


            <div class="col-md-2">

            </div>

            <div class="col-md-8">
                <h2 class="m-b-2">Formulario de Impuesto Nuevo</h2>


                <form action="{{url('impuestos')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="impuesto" class="col-md-4 col-form-label">Impuesto</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id="impuesto" name="impuesto" placeholder="Nombre del Impuesto..." data-toggle="tooltip" data-placement="top" title="Nombre del impuesto...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="porcentaje" class="col-md-4 col-form-label">Porcentaje</label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" step="0.01" id="porcentaje" name="porcentaje" placeholder="Porcentaje del Impuesto..." data-toggle="tooltip" data-placement="top" title="Porcentaje del impuesto...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Enviar</button>
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