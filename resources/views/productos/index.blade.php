@extends('app');
@section('content');
<section class="bienvenidos">

        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.html" class="logo">
                    <!--<img src="images/logo.svg" alt="Logo del sitio">-->
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
                        <li class="active"><a href="index.html">Inicio</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="contacto.html">Contacto</a></li>
                        <li><a href="sesion.html">Login</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        <!--<div class="texto-encabezado text-xs-center">

            <div class="container">
                .<h1 class="display-4 wow bounceIn">MAPA TECNOLOGÍA </h1>
                <a href="contacto.html" class="btn btn-primary btn-lg">Contactanos</a>
            </div>

        </div>-->
        <div class="flecha-bajar text-xs-center">
            <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>

    </section>
    <!--<section class="agencia p-y-1" id="agencia">

        <div class="container">


            <div class="row">

                <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                    <h2 class="h3 text-xs-center text-md-left font-weight-bold">Sistemas Simple para soluciones</h2>
                    <p>MAPA brinda asesorias y soluciones empresariales</p>

                </div>
                <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                    <img src="images/agencia.svg" alt="La agencia">
                </div>
            </div>
        </div>

    </section>-->
    <section class="tu-mejor-eleccion p-y-1">
        <div class="container">

            <h2 class="h3 text-xs-center font-weight-bold">¿Por que<span> Nosotros?</span></h2>
            <p class="text-xs-center">
                Desarrollo de Aplicaciones
            </p>

            <div class="row">
                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>

                        <div class="contenedor-eleccion">
                            <h4>Aplicaciones para la nube</h4>
                            <p class="hidden-md-down">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Fábrica de software</h4>
                            <p class="hidden-md-down">Servicios de mejora correctiva y evolutiva para sus aplicaciones.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.1s">

                        <i class="fa  fa-comment-o" aria-hidden="true"></i>

                        <div class="contenedor-eleccion">
                            <h4>Gestión en la Nube</h4>
                            <p class="hidden-md-down">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                </ul>

                <div class="hidden-md-down col-lg-4">
                    <img src="images/mundo.svg" alt="Mundo movil">
                </div>

                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                        <i class="fa  fa-calendar" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Videojuegos</h4>
                            <p class="hidden-md-down">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                        <i class="fa  fa-check-square-o" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Diseño personalizado</h4>
                            <p class="hidden-md-down">Customiza hasta el último píxel de tu App. Infinitas Posibilidades.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.3s">
                        <i class="fa  fa-cogs" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Funciones a medida</h4>
                            <p class="hidden-md-down">Tienes más de 50 funciones predesarrolladas para escoger.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <main class="servicios p-y-1">
        <div class="container">
            <h2 class="text-xs-center font-weight-bold">Nuestros Servicios</h2>


            <div class="row">
                <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                    <img src="images/servicio-1.svg" alt="Servicio Desarrollo de Aplicaciones Mobiles">
                    <h3><a href="#"> Desarrollo de Aplicaciones Mobiles </a></h3>
                    <p class="hidden-sm-down">Desarrollamos aplicaciones móviles y plataformas web. Nuestra principal cualidad está en el desarrollo de software a medida de tus necesidades.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>

                </article>

                <article class="col-md-4 wow bounceInUp" data-wow-delay=".6s">
                    <img src="images/servicio-2.svg" alt="Servicio Consultoría Tecnológica">
                    <h3><a href="#">Consultoría Tecnológica</a></h3>
                    <p class="hidden-sm-down">Ofrecemos consultoría tecnológica especializada en movilidad, necesaria previo al desarrollo de cualquier proyecto.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                </article>

                <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                    <img src="images/servicio-3.svg" alt="Servicio Marketing y publicidad Movil">
                    <h3><a href="#">Marketing y publicidad Movil</a></h3>
                    <p class="hidden-sm-down">Desarrollamos campañas publicitarias para tus APP. Hacemos conocer tu marca en el momento exacto para conseguir un mayor inpacto.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                </article>

            </div>
        </div>
    </main>


@endsection;