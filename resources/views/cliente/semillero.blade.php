@extends('layouts.layoutview')
 
@section('title', 'Semilleros')
@section('container', 'container')
 
@section('content')
<div class="row justify-content-md-center my-4">
        <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 3px solid #aa1916;">
                    <div class="row">
                        <div class="col-md-12">
                                <h1 style="font-size: 30px;">
                                <b>Semilleros</b></h1>
                        </div>
                    </div>
                </div>
            <div class="col-md-12"> 
                <div class="table-responsive">
                <table class="table">
           <thead>
                                <tr style="text-align: center">
                                    <th scope="col">Semillero </th>
                                    <th scope="col">Caracteristicas</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($semillero))
                            @foreach($semillero as $sem)
                                <tr >
                                    <th style="text-align: center">
                                            <h4> {{$sem->sigla}} </h4>
                                            <h5> {{$sem->nombre}} </h5>
                                            <img src="{{ asset('uploads').'/'.$sem->logo}}" class="img-fluid">
                                    </th>

                                    <th style="text-align: justify"> 
                                        <h5>Fecha de creación: </h5> <p> {{$sem->fechacreacion}} </p>
                                        <h5>Objeto: </h5> <p>{{$sem->objeto}} </p>
                                        <h5>Director: </h5> <p>{{$sem->director}} </p>
                                        <h5>Correo: </h5> <p>{{$sem->correo}} </p>
                                        <h5>Actividades destacadas: </h5><p>{{$sem->caracteristicas}} </p>
                                    </th>

                                </tr>
                            @endforeach
                            @else
                            <p>No hay semilleros registrados</p>
                            @endif
                            </tbody>
            </table>
                </div>               
            
        </div>
            </div>
@endsection