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
    <meta name="description" content="GINCUS">
    <meta name="keywords" content="GINCUS">
    {{--<link rel="stylesheet" href="css/style.css">--}}
    @livewireStyles
</head>

<body class="grey lighten-3">
    <header class="py-4 animated fadeInUp d-none d-lg-block" style="background-image: url('{{ asset('img/header-superior-principal.jpg') }}'); background-attachment: fixed;">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-2">
                    <a  href="{{url('/')}}"> <img src="/img/gincus.png" alt="" class="img-fluid" title="LOGO GICE"> </a>
                </div>
                <div class="col-6">
                    <h1 class="h1">GINCUS</h1>
                    <h4 class="h4"> Grupo de Investigación para el cuidado de la Salud</h4>
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
                    <a class="dropdown-item" href="{{url('/#presentacion')}}">Misión & Visión</a>
                        <a class="dropdown-item" href="{{url('/#objetivos')}}">Objetivos</a>
                        <a class="dropdown-item" href="{{url('/#valores')}}">Valores</a>
                        <a class="dropdown-item" href="#">Imagen corporativa</a>
                        <a class="dropdown-item" href="{{url('linea')}}">Lineas de Investigación</a>
                        <a class="dropdown-item" href="{{url('investigador')}}">Investigadores</a>
                        <a class="dropdown-item" href="{{url('/#servicios')}}">Servicios</a>
                        <a class="dropdown-item" href="#">Contacto</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('proyecto')}}">PROYECTOS </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('red')}}">REDES</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{url('evento')}}">EVENTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('publicacion')}}">PUBLICACIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">RECOPILACIÓN PANELES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('semillero')}}">SEMILLEROS</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style='margin: 20px; padding: 50px;'>
  
            <div class="row">
                <div class="col">
                
                </div>
                
                <div class="col-10">
               

                <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 3px solid #aa1916;">
                    <div class="row">
                        <div class="col-md-12">
                                <h1 style="font-size: 30px;">
                                <b>Proyectos</b></h1>
                        </div>
                    </div>
                </div>



    <div class="container-fluid">
        <div class="row">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Caracteristicas</th>
                </tr>
            </thead>
            <tbody>
            @if(count($proyecto))
            @foreach($proyecto as $pro)
                <tr>
                    
                    <th style="text-align: center">
                        <h4> {{$pro->nombre}} </h4>
                        <img src="{{asset('img/'.$pro->logo.'.png')}}"  class="img-fluid" title="LOGO">
                    </th>
                    
                    <th> 

                    <h5>Descripción: </h5><p>{{$pro->descripcion}}</p>
                    <h5>Ejes de trabajo: </h5>
                        <p> 
                            <ul class="list-group">
                                @foreach($pro->ejeProyecto as $eje)
                                <il>• {{$eje->eje}}</il>
                                @endforeach
                            </ul>
                        </p>
                    <h5>Objetivos: </h5>
                        <p>
                            <ul class="list-group">
                                @foreach($pro->objetivoProyecto as $obj)
                                <il>• {{$obj->objetivo}}</il>
                                @endforeach
                            </ul>
                        </p>
                    <h5>Resultados esperados: </h5>
                        <p>
                            <ul class="list-group">
                                @foreach($pro->resultados as $resu)
                                <il>• {{$resu->resultado}}</il>
                                @endforeach
                            </ul>
                        </p>
                    <h5>Responsables: </h5>
                        <p>
                            <ul class="list-group">
                                @foreach($pro->responsables as $res)
                                <il>• {{$res->responsable}}</il>
                                @endforeach
                            </ul>
                        </p>
                    </th>
                </tr>
                @endforeach
                @else
                                <p>No hay Proyectos registrados</p>
                                @endif
            </tbody>
        </table>
        </div>
        
    </div>

    </div>
                <div class="col">
                
                </div>
            </div>
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