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
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/Ufps.edu.co" role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/UFPSCUCUTA" role="button" target="_blank"><i class="fab fa-twitter"></i></a>
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ufpscucuta" role="button" target="_blank"><i class="fab fa-instagram"></i></a>
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