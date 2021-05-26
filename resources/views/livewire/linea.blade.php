<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabla de Lineas de Investigación</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearLinea">Crear Linea</button>

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
                    @if($lineas->count())
                    @foreach($lineas as $linea)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$linea->linea}}</td>
                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$linea->id}})" data-toggle="modal" data-target="#editarLinea">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar la Linea?') || event.stopImmediatePropagation()" wire:click="destroy({{$linea->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay Lineas</p>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearLinea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Linea</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newLinea" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="nombreLinea">Linea:</label>
                            <input type="text" class="form-control" id="nombreLinea" aria-describedby="emailHelp" placeholder="Ingrese la Linea" required wire:model.defer="nombre">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newLinea">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarLinea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Linea</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editLinea" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreSector">Linea:</label>
                            <input type="text" class="form-control" id="nombreLinea" aria-describedby="emailHelp" placeholder="Ingrese la Linea" required wire:model.defer="nombre">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editLinea">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
