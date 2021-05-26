@extends('layouts.app')

@section('content')

<h1>Lineas de Investigación</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:linea />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('linea creada', function() {
        Swal.fire(
            'Linea creada correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearLinea').modal('hide');
    })
    Livewire.on('linea borrada', function() {
        Swal.fire(
            'Linea borrada correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('linea editada', function() {
        Swal.fire(
            'Linea editada correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarLinea').modal('hide');
    })
</script>
@endsection