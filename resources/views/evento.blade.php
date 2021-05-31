@extends('layouts.app')

@section('content')

<h1>Evento</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:evento />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('evento registrado', function() {
        Swal.fire(
            'Evento creado correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearEvento').modal('hide');
    })
    Livewire.on('evento borrado', function() {
        Swal.fire(
            'Evento borrado correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('evento editado', function() {
        Swal.fire(
            'Evento editado correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarEvento').modal('hide');
    })
</script>
@endsection