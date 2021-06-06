<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contacto</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                @if(!($contacto->count()))
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearContacto">Crear Conacto</button>
                @endif
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($contacto))
                    @foreach($contacto as $cont)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$cont->nombre}}</td>
                        <td>{{$cont->correo}}</td>
                        <td>{{$cont->telefono}}</td>
                        <td>{{$cont->direccion}}</td>
                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$cont->id}})" data-toggle="modal" data-target="#editarContacto">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Contacto?') || event.stopImmediatePropagation()" wire:click="destroy({{$cont->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay contactos registrados</p>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Contacto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newContacto" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombreContacto" aria-describedby="emailHelp" placeholder="Ingrese el nombre completo" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico:</label>
                            <input type="text" class="form-control" id="correoContacto" aria-describedby="emailHelp" placeholder="Ingrese el correo electronico" required wire:model.defer="correo">
                        </div>
                        <div class="form-group">
                            <label for="linea">Telefono:</label>
                            <input type="text" class="form-control" id="lineaContacto" aria-describedby="emailHelp" placeholder="Ingrese el telefono" required wire:model.defer="telefono">
                        </div>
                        <div class="form-group">
                            <label for="departamento">Direccion</label>
                            <input type="text" class="form-control" id="departamentoContacto" aria-describedby="emailHelp" placeholder="Ingrese la direccion" required wire:model.defer="direccion">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newContacto">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Contacto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editContacto" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreedit">Nombre:</label>
                            <input type="text" class="form-control" id="nombreedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="correoedit">Correo:</label>
                            <input type="text" class="form-control" id="correoedit" aria-describedby="emailHelp" placeholder="Ingrese el correo" required wire:model.defer="correo">
                        </div>
                        <div class="form-group">
                            <label for="telefonoedit">Telefono:</label>
                            <input type="text" class="form-control" id="telefonoedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="telefono">
                        </div>
                        <div class="form-group">
                            <label for="direccionedit">Direccion:</label>
                            <input type="text" class="form-control" id="direccionedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="direccion">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editContacto">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>