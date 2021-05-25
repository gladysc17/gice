@extends('layouts.app')

@section('content')

<h1>Listado de Valores</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:valor />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('valor creado', function() {
        Swal.fire(
            'valor Creado Correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearValor').modal('hide');
    })
    Livewire.on('valor borrado', function() {
        Swal.fire(
            'Valor borrado Correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('valor editado', function() {
        Swal.fire(
            'valor editado Correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarValor').modal('hide');
    })
</script>
@endsection