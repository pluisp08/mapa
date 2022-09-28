@extends('app-data');
@section('content')
<main class="p-y-1">
    <div class="container">
        <div class="row">


        <div class="col-md-2">
               
            </div>

            <div class="col-md-8">
                <h2 class="m-b-2">Ingrese la Tasa del Dolar</h2>


                <form action="{{url('/tasas')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="tasa" class="col-md-4 col-form-label">Tasa $</label>
                        <div class="col-md-8">  
                            <input class="form-control" type="text" id="tasa" name="tasa"  data-toggle="tooltip" data-placement="top" placeholder="Tasa del Dolar.." title="Tasa del Dolar...">
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