@extends('layouts.app')

@section('content')

<h1>Objetivos del grupo</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:objetivo />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('Objetivo creado', function() {
        Swal.fire(
            'Objetivo creado correctamente',
            'Se ha creado con éxito',
            'success'
        )
        $('#crearObjetivo').modal('hide');
    })
    Livewire.on('Objetivo borrado', function() {
        Swal.fire(
            'Objetivo borrado correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('Objetivo editado', function() {
        Swal.fire(
            'Objetivo editado correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarObjetivo').modal('hide');
    })
</script>
@endsection