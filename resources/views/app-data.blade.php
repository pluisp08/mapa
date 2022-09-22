<!DOCTYPE html>
<html lang="en">

<head>
    <title>MAPA</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Cargando fuentes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    <link href={{asset('css/font-awesome.min.css')}} rel='stylesheet' type='text/css'>

    <!-- Carga de Galeria de imágenes -->

    <link href={{asset('css/owl.carousel.min.css')}} rel='stylesheet' type='text/css'>

    <!-- Carga de archivos css -->
    <link rel="stylesheet" href={{asset('css/bootstrap.css')}}>

    <link href={{asset('css/animate.min.css')}} rel='stylesheet' type='text/css'>
    <link href={{asset('css/estilos.css')}} rel='stylesheet' type='text/css'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel='stylesheet' type='text/css'>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel='stylesheet' type='text/css'>
</head>

<body class="paginas-internas">
    <section class="bienvenidos">
        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.html" class="logo">
                    <img src="../images/logo.svg" alt="Logo del sitio">
                </a>
                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li class="active"><a href="/">Inicio</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="contacto.html">Contacto</a></li>
                        <li><a href="/usuarios">Login</a></li>
                    </ul>
                </nav>

            </div>
        </header>
        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4 wow bounceIn">MAPA TECNOLOGÍA </h1>
            </div>
        </div>
    </section>

    @yield('content')


    <footer class="piedepagina p-y-2" role="contentinfo">
        <div class="container">
            <p>2022 © MAPA TECNOLOGÍA Todos los derechos reservados</p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i> </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <!--<a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>-->

    <!-- Carga de archivos  JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>



    <script>
        $(document).ready(function() {
            $('#productos').DataTable();
        });
    </script>




</body>

</html>