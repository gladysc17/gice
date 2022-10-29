@extends('layouts.layoutview')
 
@section('title', 'Eventos')
@section('container', 'container')
 
@section('content')
<div class="row justify-content-md-center my-4">
        <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom: 3px solid #aa1916;">
                    <div class="row">
                        <div class="col-md-12">
                                <h1 style="font-size: 30px;">
                                <b>Eventos</b></h1>
                        </div>
                    </div>
                </div>
            <div class="col-md-12"> 
                <div class="table-responsive">
                <table class="table">
                @if(count($evento))
            @foreach($evento as $eve)
            <thead>
                <tr>
                <td colspan="6"><h3>{{$eve->nombre}}<h3></td>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><p> <td><img src="{{asset('img/'.$eve->afiche.'.png')}}" width="320" height="380" class="img-fluid" title="LOGO"></td></p></td>
                    <td>
                        <p> <b>Lema:</b> {{$eve->lema}}</p>
                        <p> <b>Fecha:</b>{{$eve->fecha}}</p>
                        <p> <b>Lugar:</b> {{$eve->lugar}}</p>
                        <p> <b>Tipo:</b> {{$eve->tipo}}</p>
                    </td>
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