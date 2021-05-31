@extends('layouts.app')

@section('content')

<h1>Semilleros</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:semillero />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('Semillero registrado', function() {
        Swal.fire(
            'Semillero creado correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearSemillero').modal('hide');
    })
    Livewire.on('Semillero borrado', function() {
        Swal.fire(
            'Semillero borrado correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('Semillero editado', function() {
        Swal.fire(
            'Semillero editado correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarSemillero').modal('hide');
    })
</script>
@endsection