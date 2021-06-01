<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabla de Servicios</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearServicio">Crear Servicio</button>

            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Componentes</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @if($servicios->count())
                    @foreach($servicios as $servicio)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$servicio->nombre}}</td>
                        <td>{{$servicio->descripcion}}</td>
                        <td>{{$servicio->componentes->count()}}</td>
                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$servicio->id}})" data-toggle="modal" data-target="#editarServicio">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Servicio?') || event.stopImmediatePropagation()" wire:click="destroy({{$servicio->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay Servicio</p>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearServicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Servicio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newSector" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="nombreServicio">Nombre Servicio:</label>
                            <input type="text" class="form-control" id="nombreServicio" aria-describedby="emailHelp" placeholder="Ingrese El nombre del servicio" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcionServicio">Descripcion:</label>
                            <textarea id="descripcionServicio" class="form-control" rows="3" wire:model.defer="descripcion" placeholder="Ingrese la descripcion del servicio" required></textarea>
                        </div>
                        <table class="table" id="createComponents">
                            <thead>
                                <tr>
                                    <th>Componente</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($componentes as $index => $component)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model.defer="componentes.{{$index}}.componente" placeholder="Ingrese el componente" required></textarea></td>
                                    @if(count($componentes)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeComponent({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addComponent">+ agregar otro componente</button>
                            </div>
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
    <div class="modal fade" id="editarServicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Servicio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editServicio" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreServicio">Nombre Servicio:</label>
                            <input type="text" class="form-control" id="nombreServicio" aria-describedby="emailHelp" placeholder="Ingrese El nombre del servicio" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcionServicioEdit">Descripcion:</label>
                            <textarea id="descripcionServicioEdit" class="form-control" rows="3" wire:model.defer="descripcion" placeholder="Ingrese la descripcion del servicio" required></textarea>
                        </div>
                        <table class="table" id="editComponents">
                            <thead>
                                <tr>
                                    <th>Componente</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($componentes as $index => $component)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model="componentes.{{$index}}.componente" placeholder="Ingrese el componente" required></textarea></td>
                                    @if(count($componentes)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeEditComponent({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addComponent">+ agregar otro componente</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editServicio">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>