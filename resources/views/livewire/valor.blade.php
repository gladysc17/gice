<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabla de Valores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearValor">Crear Valor</button>

            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @if($valores->count())
                    @foreach($valores as $valor)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$valor->valor}}</td>
                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$valor->id}})" data-toggle="modal" data-target="#editarValor">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Valor?') || event.stopImmediatePropagation()" wire:click="destroy({{$valor->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay Valores</p>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearValor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
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
                            <label for="nombreValor">Valor:</label>
                            <input type="text" class="form-control" id="nombreValor" aria-describedby="emailHelp" placeholder="Ingrese El Valor" required wire:model.defer="nombre">
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
    <div class="modal fade" id="editarValor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Valor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editSector" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreSector">Valor:</label>
                            <input type="text" class="form-control" id="nombreSector" aria-describedby="emailHelp" placeholder="Ingrese el Valor" required wire:model.defer="nombre">
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