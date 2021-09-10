@extends('layouts.app')

@section('content')

<h1>Proyectos</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:proyecto />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('Proyecto registrado', function() {
        Swal.fire(
            'Proyecto creado correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearProyecto').modal('hide');
    })
    Livewire.on('Proyecto borrado', function() {
        Swal.fire(
            'Proyecto borrado correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('Proyecto editado', function() {
        Swal.fire(
            'Proyecto editado correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarProyecto').modal('hide');
    })
</script>
@endsection