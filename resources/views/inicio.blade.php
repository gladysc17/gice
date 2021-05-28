<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GICE</title>
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
    {{--<link rel="shortcut icon" type="image/x-icon" href="images/CI.png" />--}}
    <meta name="description" content="GICE">
    <meta name="keywords" content="GICE">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="grey lighten-3">
    <header class="py-4 animated fadeInUp d-none d-lg-block" style="background-image: url(https://ingsistemas.cloud.ufps.edu.co/rsc/img/header-superior-principal.jpg); background-attachment: fixed;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="https://picsum.photos/200/160" alt="" class="img-fluid" title="Comercio Internacional UFPS">
                </div>
                <div class="col-6">
                    <h1 class="h1">GICE</h1>
                </div>

                <div class="col-lg-4 ml-auto ">
                    <img src="https://picsum.photos/1280/480" class="img-fluid" title="OCIF">
                </div>
            </div>
        </div>

    </header>


    <nav class="navbar sticky-top navbar-expand-lg text-center navbar-dark danger-color-dark animated fadeInUp slow">
        <a class="navbar-brand mb-0 h1 ml-lg-5 d-none d-xs-none d-sm-none d-md-none d-lg-block" href="index.html">
            Inicio</a>
        <a class="navbar-brand mb-0 h1 ml-lg-5 d-block d-xs-none d-sm-block d-md-block d-lg-none" href="#">
            <img src="https://ww2.ufps.edu.co/public/imagenes/noticia/Comunicado_073_grand.png" width="50" class="d-inline-block align-top" alt="">Oferta Exportable<br>N. Santander</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-lg-5">
                <li class="nav-item">
                    <a class="nav-link d-block d-xs-none d-sm-block d-md-block d-lg-none" href="index.html">Inicio </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row d-flex justify-content-center pb-4">



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
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores laborum nisi laboriosam delectus reprehenderit officiis cumque error odit molestiae? Est provident assumenda earum iusto quod unde, error veritatis. Fugiat, sit?
                        <br>E-mail: <a href="mailto:sdfsdfsd@asdasd.org.co" target="_blank">sdfsdfsd@asdasd.org.co</a> / <a href="#" target="_blank">www.sdfsdf.org.co</a><br>
                        Cúcuta - Norte de Santander - Colombia
                    </p>

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

</body>

</html>