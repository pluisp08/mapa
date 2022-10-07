@extends('app-data');
@section('content')
<main class="p-y-1">
    <div class="container">
        <div class="row">


            <div class="col-md-2">

            </div>

            <div class="col-md-8">
                <h2 class="m-b-2">Formulario de Producto Nuevo</h2>


                <form action="{{url('/productos')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="tasa" class="col-md-4 col-form-label">Tasa $</label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" step="0.01" id="tasa" name="tasa" data-toggle="tooltip" data-placement="top" title="Tasa del Dolar..." readonly value={{$tasas}}>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label">Nombre</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre del Producto" data-toggle="tooltip" data-placement="top" title="Nombre del Producto...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="codbarra" class="col-md-4 col-form-label">Codigo de Barras</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" id="codbarra" name="codbarra" placeholder="Codigo..." data-toggle="tooltip" data-placement="top" title="Codigo de Barras del Producto...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="costo_bolivar" class="col-md-4 col-form-label">Costo Bs</label>

                        <div class="col-md-8">
                            <input class="form-control" type="number" step="0.01" id="costo_bolivar" name="costo_bolivar" placeholder="Costo Bs..." data-toggle="tooltip" data-placement="top" title="Costo BS...">

                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="costo_dolar" class="col-md-4 col-form-label">Costo $</label>

                        <div class="col-md-8">
                            <input class="form-control" type="number" step="0.01" id="costo_dolar" name="costo_dolar" placeholder="Costo en $" data-toggle="tooltip" data-placement="top" title="Costo $...">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="precio" class="col-md-4 col-form-label">Impuesto</label>

                        <div class="col-md-8">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="impuesto_id">
                                    <option selected>Seleccione Impuesto...</option>
                                    @foreach ($impuestos as $impuesto)
                                        <option value="{{$impuesto->id}}">{{$impuesto->impuesto}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="precio" class="col-md-4 col-form-label">Grupo</label>

                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                                </div>
                                <select class="custom-select" id="grupoId" name="grupo_id">
                                    <option selected>Seleccione Grupo de Producto...</option>
                                    @foreach ($grupos as $grupo )
                                    <option value="{{$grupo->id}}" id="{{$grupo->id}}">{{$grupo->nombre}}</option>
                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" id="utilidad" name="utilidad" placeholder="% Utilidad" data-toggle="tooltip" data-placement="top" title="% de Utilidad" readonly>
                        </div>


                    </div>

                    <div class="form-group row">
                        <label for="precio" class="col-md-4 col-form-label">Precio</label>

                        <div class="col-md-8">
                            <input class="form-control" type="number" step="0.01" id="precio" name="precio" placeholder="Precio..." data-toggle="tooltip" data-placement="top" title="Precio...">
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