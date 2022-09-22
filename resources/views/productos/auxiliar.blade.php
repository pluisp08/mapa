@extends('app-data');
@section('content')
<main class="p-y-3">
    <div class="container p-y-1">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="m-b-2">Auxilio de Codigo de Barras del Producto</h2>
                <form action="">
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label">Nombre</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre del Producto" data-toggle="tooltip" data-placement="top" title="Nombre del Producto...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="codbarra" class="col-md-4 col-form-label">Codigo de Barras</label>

                        <div class="col-md-8">
                            <input class="form-control" type="text" id="codbarra" name="codbarra" placeholder="Codigo de Barras..." data-toggle="tooltip" data-placement="top" title="Codigo de Barras...">
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
            <div class="col-md-2"></div>
        </div>
    </div>
</main>
@endsection