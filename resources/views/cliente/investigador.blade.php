@extends('layouts.layoutview')
 
@section('title', 'Investigadores')
@section('container', 'container')
 
@section('content')
<div class="row justify-content-md-center my-4">
        <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 3px solid #aa1916;">
                    <div class="row">
                        <div class="col-md-12">
                                <h1 style="font-size: 30px;">
                                <b>Investigadores</b></h1>
                        </div>
                    </div>
                </div>
            <div class="col-md-12"> 
                <div class="table-responsive">
                <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Dpto Académico</th>
                <th scope="col">CvLAC</th>
                <th scope="col">Orcid</th>
            
                </tr>
            </thead>
            <tbody>
            @if(count($investigador))
            @foreach($investigador as $inv)
                 <tr>
                    <th scope="row">{{$inv->nombre}}</th>
                    <td>{{$inv->correo}}</td>
                    <td>{{$inv->departamento}}</td>
                    <td>{{$inv->cvlac}}</td>
                    <td>{{$inv->orcid}}</td>
                </tr>
            @endforeach
            @else
             <p>No hay eventos registrados</p>
                    @endif
            </tbody>
            </table>
                </div>               
            
        </div>
            </div>
@endsection