@extends('layouts.app')

@section('content')

<h1>Contacto</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:contacto />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('contacto registrado', function() {
        Swal.fire(
            'Contacto creado correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearContacto').modal('hide');
    })
    Livewire.on('contacto borrado', function() {
        Swal.fire(
            'Contacto borrado correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('contacto editado', function() {
        Swal.fire(
            'Contacto editado correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarContacto').modal('hide');
    })
</script>
@endsection