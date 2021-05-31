@extends('layouts.app')

@section('content')

<h1>Listado de Servicios</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:servicio />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('servicio creado', function() {
        Swal.fire(
            'servicio Creado Correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearServicio').modal('hide');
    })
    Livewire.on('servicio borrado', function() {
        Swal.fire(
            'servicio borrado Correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('servicio editado', function() {
        Swal.fire(
            'Servicio editado Correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarServicio').modal('hide');
    })
</script>
@endsection