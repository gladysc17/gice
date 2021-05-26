@extends('layouts.app')

@section('content')

<h1>Mision y Vision</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:presentacion />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('presentacion creada', function() {
        Swal.fire(
            'Presentacion Creada Correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearPresentacion').modal('hide');
    })
    Livewire.on('presentacion borrada', function() {
        Swal.fire(
            'Presentacion borrada Correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('presentacion editada', function() {
        Swal.fire(
            'presentacion editada Correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarPresentacion').modal('hide');
    })
</script>
@endsection