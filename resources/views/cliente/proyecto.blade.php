@extends('layouts.layoutview')
 
@section('title', 'Proyectos')
@section('container', 'container')
 
@section('content')
<div class="row justify-content-md-center my-4">
        <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 3px solid #aa1916;">
                    <div class="row">
                        <div class="col-md-12">
                                <h1 style="font-size: 30px;">
                                <b>Proyectos</b></h1>
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
@endsection