<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabla de Objetivos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearObjetivo">Crear Objetivo</button>

            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @if($objetivos->count())
                    @foreach($objetivos as $objetivo)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$objetivo->objetivo}}</td>
                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$objetivo->id}})" data-toggle="modal" data-target="#editarObjetivo">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Objetivo?') || event.stopImmediatePropagation()" wire:click="destroy({{$objetivo->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay Objetivos registrados</p>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearObjetivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Objetivo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newObjetivo" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="nombreObjetivo">Objetivo:</label>
                            <textarea id="nombreObjetivo" class="form-control" name="" rows="3" wire:model.defer="nombre" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newObjetivo">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarObjetivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Objetivo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editObjetivo" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreObjetivo">Objetivo:</label>
                            <textarea id="nombreObjetivo" class="form-control" name="" rows="3" wire:model.defer="nombre" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editObjetivo">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>