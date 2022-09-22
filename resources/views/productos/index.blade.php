@extends('app-data')
@section('content')
<section class="nosotros p-y-1">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md8">
                <table id="productos" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Costo Bs</th>
                            <th>Costo $</th>
                            <th>Precio</th>
                            <th>Impuesto</th>
                            <th></th>
                            <th></th>
                            


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td><a href="/productos/editar"><i class="fa fa-pencil" aria-hidden="true" title="Editar"></i></a></td>
                            <td><a href="/productos/auxiliar"><i class="fa fa-barcode" aria-hidden="true" title="Auxiliar Codigo de Barras"></i></a></td>

                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011-07-25</td>
                            <td><a href="/productos/editar"><i class="fa fa-pencil" aria-hidden="true" title="Editar"></i></a></td>
                            <td><a href="/productos/auxiliar"><i class="fa fa-barcode" aria-hidden="true" title="Auxiliar Codigo de Barras"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009-01-12</td>
                            <td><a href="/productos/editar"><i class="fa fa-pencil" aria-hidden="true" title="Editar"></i></a></td>
                            <td><a href="/productos/auxiliar"><i class="fa fa-barcode" aria-hidden="true" title="Auxiliar Codigo de Barras"></i></a></td>

                        </tr>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Costo Bs</th>
                            <th>Costo $</th>
                            <th>Precio</th>
                            <th>Impuesto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
                <a href="/productos/nuevo" class="btn btn-primary btn-small">Nuevo Producto</a>
            </div>
            <div class="col-md-2"></div>
            
        </div>
    </div>
</section>

@endsection