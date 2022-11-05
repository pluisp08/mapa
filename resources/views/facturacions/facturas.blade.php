@extends('app-data')
@section('content')
<section class="nosotros p-y-1">
    <div class="container">
        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="m-b-2">Ingrese Criterio de Busqueda</h2>
                <form action="">
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label">Nombre</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre del Producto" data-toggle="tooltip" data-placement="top" title="Nombre del Producto...">
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
    </div>
</section>

@endsection