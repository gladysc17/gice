<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabla de Presentacion</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                @if(!count($presentacion))
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearPresentacion">Crear Presentacion</button>
                @endif
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Mision</th>
                        <th>Vision</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($presentacion))
                    @foreach($presentacion as $pres)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$pres->mision}}</td>
                        <td>{{$pres->vision}}</td>
                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit()" data-toggle="modal" data-target="#editarPresentacion">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Valor?') || event.stopImmediatePropagation()" wire:click="destroy()">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay Presentacion</p>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearPresentacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Valor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newSector" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="mision">Mision:</label>
                            <textarea class="form-control" id="mision" rows="3" wire:model.defer="mision" placeholder="Ingrese la Mision" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="vision">Vision:</label>
                            <textarea class="form-control" id="vision" rows="3" wire:model.defer="vision" placeholder="Ingrese la Vision" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newSector">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarPresentacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Presentacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editSector" wire:submit.prevent="update">
                    <div class="form-group">
                            <label for="misionedit">Mision:</label>
                            <textarea class="form-control" id="misionedit" rows="3" wire:model.defer="mision" placeholder="Ingrese la Mision" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="visionedit">Vision:</label>
                            <textarea class="form-control" id="visionedit" rows="3" wire:model.defer="vision" placeholder="Ingrese la Vision" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editSector">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>