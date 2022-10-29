<nav class="navbar sticky-top navbar-expand-lg text-center navbar-dark danger-color-dark animated fadeInUp slow">
        <a class="navbar-brand" href="{{url('/')}}"> <img src="/img/gincus.png" height="50" alt="mdb logo"> 
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
                        <a class="dropdown-item" href="{{url('linea')}}">Lineas de Investigación</a>
                        <a class="dropdown-item" href="{{url('investigador')}}">Investigadores</a>
                        <a class="dropdown-item" href="#servicios">Servicios</a>
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

            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
            </ul>

        </div>
    </nav>