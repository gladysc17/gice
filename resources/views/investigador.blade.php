@extends('layouts.app')

@section('content')

<h1>Investigadores</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <livewire:investigador />
    </div>
</div>

@endsection

@section('footer-scripts')
@livewireScripts
<script>
    Livewire.on('Investigador(a) registrado (a)', function() {
        Swal.fire(
            'Investigador creado correctamente',
            'Se ha creado con exito',
            'success'
        )
        $('#crearInvestigador').modal('hide');
    })
    Livewire.on('Investigador(a) borrado(a)', function() {
        Swal.fire(
            'Investigador(a) borrado(a) correctamente',
            'Se ha eliminado con exito',
            'success'
        )
    })
    Livewire.on('Investigador(a) editado(a)', function() {
        Swal.fire(
            'investigador editado(a) correctamente',
            'Se ha editado con exito',
            'success'
        )
        $('#editarInvestigador').modal('hide');
    })
</script>
@endsection