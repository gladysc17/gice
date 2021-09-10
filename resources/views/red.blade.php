@extends('layouts.app')

@section('content')

<h1>Redes</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:red />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('Red registrada', function() {
        Swal.fire(
            'Red creada correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearRed').modal('hide');
    })
    Livewire.on('Red borrada', function() {
        Swal.fire(
            'Red borrada correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('Red editada', function() {
        Swal.fire(
            'Red editada correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarRed').modal('hide');
    })
</script>
@endsection