<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GINCUS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dc4f193fbc.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/css/mdb.min.css" rel="stylesheet">
    <meta name="description" content="GICE">
    <meta name="keywords" content="GICE">
    {{--<link rel="stylesheet" href="css/style.css">--}}
    @livewireStyles
</head>

<body class="grey lighten-3">
    <header class="py-4 animated fadeInUp d-none d-lg-block" style="background-image: url('{{ asset('img/header-superior-principal.jpg') }}'); background-attachment: fixed;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="/img/gincus.png" alt="" class="img-fluid" title="LOGO GINCUS">
                </div>
                <div class="col-6">
                    <h1 class="h1">GINCUS</h1>
                    <h4 class="h4"> Grupo de Investigación Para el Cuidado de la Salud - UFPS</h4>
                </div>

                <div class="col-lg-4 ml-auto ">
                    <img src="/img/logo-ufps.png" class="img-fluid" title="UFPS">
                </div>
            </div>
        </div>

    </header>


    <nav class="navbar sticky-top navbar-expand-lg text-center navbar-dark danger-color-dark animated fadeInUp slow">
        <a class="navbar-brand" href="#">
            <img src="/img/gincus.png" height="50" alt="mdb logo">
            <strong>GINCUS</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PRESENTACIÓN</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#aboutus">Misión & Visión</a>
                        <a class="dropdown-item" href="#objetivos">Objetivos</a>
                        <a class="dropdown-item" href="#valores">Valores</a>
                        <a class="dropdown-item" href="#">Imagen corporativa</a>
                        <a class="dropdown-item" href="#">Lineas de Investigación</a>
                        <a class="dropdown-item" href="#">Investigadores</a>
                        <a class="dropdown-item" href="#">Contacto</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">PROYECTOS Y REDES</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">SERVICIOS</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">EVENTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PUBLICACIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">RECOPILACIÓN PANELES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SEMILLEROS</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://picsum.photos/1280/540" alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="https://picsum.photos/1280/540" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="https://picsum.photos/1280/540" alt="Third slide">
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <div class="container-fluid">

        <div class="row p-lg-5 pb-5 align-items-center" id="aboutus">
            <div class="col-12 my-4 wow fadeIn">
                <h1 class="text-center font-weight-bold">Presentación</h1>
            </div>
            <div class="col-lg-6 mb-4 mb-md-0 wow fadeInUp">
                <div class="card z-depth-2" style="border-radius: 50px; opacity: 0.85;">
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title text-center">Misión:</h4>
                        <!-- Text -->
                        <p class="card-text">
                            @if(empty($presentacion))
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, deleniti ad itaque, corporis numquam modi nesciunt distinctio unde similique repellat enim quas, at ipsa? Officiis in nobis vitae aliquam mollitia.
                            @else
                            {{$presentacion[0]->mision}}
                            @endif
                        </p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary d-none">Button</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp">
                <div class="card z-depth-2" style="border-radius: 50px;opacity: 0.85;">
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title text-center">Visión:</h4>
                        <!-- Text -->
                        <p class="card-text">
                            @if(empty($presentacion))
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusantium eum assumenda fugit perspiciatis necessitatibus accusamus quos quasi. Officiis, suscipit amet doloremque in adipisci vel sapiente quos blanditiis beatae quam!
                            @else
                            {{$presentacion[0]->vision}}
                            @endif
                        </p>
                        <!-- Button -->
                        <a href="#" class="btn btn-primary d-none">Button</a>

                    </div>
                </div>
            </div>

        </div>



        <livewire:servicio-front />

        <div class="row p-lg-5 pb-5 align-items-center" id="objetivos">
            <div class="col-12 my-4 wow fadeIn">
                <h1 class="text-center font-weight-bold">Objetivos</h1>
            </div>

            <div class="col-md-6 mb-3">
                <ul>
                    @if($objetivos->count())
                    @for($i=0; $i<($objetivos->count()/2); $i++ )
                        <li class="my-2">{{$objetivos[$i]->objetivo}}</li>
                        @endfor

                        @endif
                </ul>
            </div>
            <div class="col-md-6 mb-3">
                <ul>
                    @if($objetivos->count())
                    @for($i=ceil($objetivos->count()/2); $i<$objetivos->count(); $i++ )
                        <li class="my-2">{{$objetivos[$i]->objetivo}}</li>
                        @endfor

                        @endif
                </ul>
            </div>
        </div>

        <div class="row p-lg-5 pb-5 align-items-center" style="background-color: #b43432;" id="valores">
            <div class="col-12 my-4 wow fadeIn">
                <h1 class="text-center font-weight-bold white-text">Valores</h1>
            </div>

            <div class="col-md-6 mb-3 white-text">
                <ul>
                    @if($valores->count())
                    @for($i=0; $i<($valores->count()/2); $i++ )
                        <li class="my-2">{{$valores[$i]->valor}}</li>
                        @endfor

                        @endif
                </ul>
            </div>
            <div class="col-md-6 mb-3 white-text">
                <ul>
                    @if($valores->count())
                    @for($i=ceil($valores->count()/2); $i<$valores->count(); $i++ )
                        <li class="my-2">{{$valores[$i]->valor}}</li>
                        @endfor

                        @endif
                </ul>
            </div>
        </div>

    </div>
    </div>


    <div id="modal">

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark text-white pt-4">



        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">


            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">{{ config('app.name', 'Laravel') }}</h5>
                    @if($contacto)
                    <p>Nombre: {{$contacto->nombre}}
                        <br>E-mail: <a href="mailto:{{$contacto->correo}}" target="_blank">{{$contacto->correo}}</a><br>
                        Telefono: {{$contacto->telefono}} <br>
                        Direccion: {{$contacto->direccion}} <br>
                        Cúcuta - Norte de Santander - Colombia
                    </p>
                    @endif

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                {{--<div class="col-md-2 mb-md-0 mb-3 offset-md-2 d-none d-md-block">
            <img src="{{asset('img/LOGO-CAMARA-COMERCIO-BLANCO-2.png')}}" class="img-fluid" alt="">
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-5 mb-md-0 mb-3 offset-1 d-md-none">
                <img src="{{asset('img/LOGO-CAMARA-COMERCIO-BLANCO-2.png')}}" class="img-fluid" alt="">
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3 d-none d-md-block">
                <img src="{{asset('img/LOGO-ALCALDIA---BLANCO.png')}}" class="img-fluid" alt="">
            </div>
            <!-- Grid column -->
            <div class="col-5 mb-md-0 mb-3 d-md-none">
                <img src="{{asset('img/LOGO-ALCALDIA---BLANCO.png')}}" class="img-fluid" alt="">
            </div>--}}

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->
        <div class="container text-center">
            <!-- Section: Social media -->
            <p>Siguenos:</p>
            <section>
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/camaracucuta" role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/cccucuta" role="button" target="_blank"><i class="fab fa-twitter"></i></a>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/camaracucuta/" role="button" target="_blank"><i class="fab fa-instagram"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="#">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
    @livewireScripts
</body>

</html>