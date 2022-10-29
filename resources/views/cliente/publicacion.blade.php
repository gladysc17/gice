@extends('layouts.layoutview')
 
@section('title', 'Publicaciones')
@section('container', 'container')
 
@section('content')
<div class="row justify-content-md-center my-4">
        <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 3px solid #aa1916;">
                    <div class="row">
                        <div class="col-md-12">
                                <h1 style="font-size: 30px;">
                                <b>Publicaciones</b></h1>
                        </div>
                    </div>
                </div>
            <div class="col-md-12"> 
                <div class="table-responsive">
                <table class="table">
            <thead>
                <tr>
                <th scope="col">Tipología</th>
                <th scope="col">Título</th>
                <th scope="col">Fecha</th>
                <th scope="col">Referencia</th>
                <th scope="col">Link</th>            
                </tr>
            </thead>
            <tbody>
            @if(count($publicacion))
            @foreach($publicacion as $pub)
                 <tr>
                    <th scope="row">{{$pub->tipologia}}</th>
                    <td>{{$pub->titulo}}</td>
                    <td>{{$pub->fecha}}</td>
                    <td>{{$pub->referencia}}</td>
                    <td><a href="{{ asset('uploads').'/'.$pub->link}}" target="_blank">Ver Publicacion</a></td>
                </tr>
            @endforeach
            @else
             <p>No hay publicaciones registradas</p>
                    @endif
            </tbody>
            </table>
                </div>               
            
        </div>
            </div>
@endsection