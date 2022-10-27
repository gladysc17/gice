@extends('layouts.app')

@section('content')

<h1>Publicaciones</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:publicacion />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('publicacion registrada', function() {
        Swal.fire(
            'publicacion registrada',
            'Se ha creado con exito',
            'success'
        )
        $('#crearPublicacion').modal('hide');
    })
    Livewire.on('publicacion borrada', function() {
        Swal.fire(
            'publicacion borrada',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('publicacion editada', function() {
        Swal.fire(
            'publicacion editada',
            'Se ha editado con exito',
            'success'
        )
        $('#editPublicacion').modal('hide');
    })
</script>
@endsection