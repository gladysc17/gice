@extends('layouts.layoutview')
 
@section('title', 'Inicio')
@section('carousel')
    @include('layouts.carousel')
@endsection
@section('container', 'container-fluid')
@section('content')
<div class="row p-lg-5 pb-5 align-items-center" id="aboutus">
            <div class="col-12 my-4 wow fadeIn">
                <h1 class="text-center font-weight-bold">Presentación</h1>
            </div>
            <div class="col-lg-6 mb-4 mb-md-0 wow fadeInUp">
                <div class="card z-depth-2" style="border-radius: 50px; opacity: 0.85;">
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title text-center">Misión</h4>
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
                        <h4 class="card-title text-center">Visión</h4>
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
@endsection