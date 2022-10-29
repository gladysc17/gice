@extends('layouts.layoutview')
 
@section('title', 'Redes')
@section('container', 'container')
 
@section('content')
<div class="row justify-content-md-center my-4">
        <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 3px solid #aa1916;">
                    <div class="row">
                        <div class="col-md-12">
                                <h1 style="font-size: 30px;">
                                <b>Redes</b></h1>
                        </div>
                    </div>
                </div>
            <div class="col-md-12"> 
                <div class="table-responsive">
                <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Caracteristicas</th>
                </tr>
            </thead>
            <tbody>
            @if(count($red))
            @foreach($red as $re)
                <tr>
                    <th style="text-align: center">
                        <h4> {{$re->nombre}} </h4>
                        <img src="{{asset('img/'.$re->logo.'.png')}}"  class="img-fluid" title="LOGO">
                    </th>
                
                <th> 

                    <h6>Descripción: </h6><p>{{$re->descripcion}}</p>
                    <h6>Año de Creación: </h6><p>{{$re->aniocreacion}}</p>
                    <h6>Tipo de vinculo: </h6><p>{{$re->tipovinculo}}</p>
                    <h6>Participantes: </h6><p>{{$re->paisesprticipantes}}</p>
                    <h6>Enlace: </h6><p><a href="{{$re->url}}">{{$re->url}}<a></p>
                    <h6>Objetivos: </h6>
                        <p>
                            <ul class="list-group">
                                @foreach($re->objetivoRed as $obj)
                                <il>• {{$obj->objetivo}}</il>
                                @endforeach
                            </ul>
                        </p>
                    <h6>Actividades: </h6>
                        <p>
                            <ul class="list-group">
                                @foreach($re->actividades as $act)
                                <il>• {{$act->actividad}}</il>
                                @endforeach
                            </ul>
                        </p>
               
                </th>

                </tr>
                @endforeach
                @else
                                <p>No hay Redes registradas</p>
                                @endif
            </tbody>
            </table>
                </div>               
            
        </div>
            </div>
@endsection