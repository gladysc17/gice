<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Red</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearRed">Crear Red</button>
               
            </div>
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Año Creacion</th>
                        <th>Tipo Vinculo</th>
                        <th>Paises Prticipantes</th>
                        <th>Enlace</th>
                        <th>Logo</th>
                        <th>Objetivos</th>
                        <th>Actividades</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($red))
                    @foreach($red as $re)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$re->nombre}}</td>
                        <td>{{$re->descripcion}}</td>
                        <td>{{$re->aniocreacion}}</td>
                        <td>{{$re->tipovinculo}}</td>
                        <td>{{$re->paisesprticipantes}}</td>
                        <td>{{$re->url	}}</td>
                        <td>{{$re->logo	}}</td>
                        <td>{{$re->objetivoRed->count()}}</td>
                        <td>{{$re->actividades->count()}}</td>

                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$re->id}})" data-toggle="modal" data-target="#editarRed">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar la Red?') || event.stopImmediatePropagation()" wire:click="destroy({{$re->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay redes registradas</p>
                    @endif
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearRed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Red</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newRed" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombreRed" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="descripcionRed" aria-describedby="emailHelp" placeholder="Ingrese la descripcion" required wire:model.defer="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="aniocreacion">Año de creacion:</label>
                            <input type="text" class="form-control" id="aniocreacion" aria-describedby="emailHelp" placeholder="Ingrese el año de creacion" required wire:model.defer="aniocreacion">
                        </div>
                        <div class="form-group">
                            <label for="tipovinculo">Tipo de vinculo:</label>
                            <input type="text" class="form-control" id="tipovinculo" aria-describedby="emailHelp" placeholder="Ingrese el tipo de vinculo" required wire:model.defer="tipovinculo">
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo:</label>
                            <input type="text" class="form-control" id="logo" aria-describedby="emailHelp" placeholder="Ingrese el logo" required wire:model.defer="logo">
                        </div>
                        <div class="form-group">
                            <label for="paisesprticipantes">Paises Participantes:</label>
                            <input type="text" class="form-control" id="paisesprticipantes" aria-describedby="emailHelp" placeholder="Ingrese los paises participantes " required wire:model.defer="paisesprticipantes">
                        </div>
                        <div class="form-group">
                            <label for="url">Enlace:</label>
                            <input type="text" class="form-control" id="url" aria-describedby="emailHelp" placeholder="Ingrese la url" required wire:model.defer="url">
                        </div>
                        <table class="table" id="createObjetivo">
                            <thead>
                                <tr>
                                    <th>Objetivos</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($objetivoRed as $index => $obj)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model.defer="objetivoRed.{{$index}}.objetivo" placeholder="Ingrese el objetivo" required></textarea></td>
                                    @if(count($objetivoRed)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeObjetivo({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addObjetivo">+ agregar otro objetivo</button>
                            </div>
                        </div>

                        <table class="table" id="createActividad">
                            <thead>
                                <tr>
                                    <th>Actividades</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($actividades as $index => $act)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model.defer="actividades.{{$index}}.actividad" placeholder="Ingrese la actividad" required></textarea></td>
                                    @if(count($actividades)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeActividad({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addActividad">+ agregar otro Responsable</button>
                            </div>
                        </div>
                
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newRed">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarRed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Red</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editRed" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreedit">Nombre:</label>
                            <input type="text" class="form-control" id="nombreedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcionedit">Descripción:</label>
                            <input type="text" class="form-control" id="descripcionedit" aria-describedby="emailHelp" placeholder="Ingrese la descripcion" required wire:model.defer="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="aniocreacionedit">Año Creacion:</label>
                            <input type="text" class="form-control" id="aniocreacionedit" aria-describedby="emailHelp" placeholder="Ingrese el año de creacon" required wire:model.defer="aniocreacion">
                        </div>
                        <div class="form-group">
                            <label for="tipovinculoedit">Tipo Vinculo:</label>
                            <input type="text" class="form-control" id="tipovinculonedit" aria-describedby="emailHelp" placeholder="Ingrese el tipo de vinculo" required wire:model.defer="tipovinculo">
                        </div>
                        <div class="form-group">
                            <label for="logoedit">Logo:</label>
                            <input type="text" class="form-control" id="logoedit" aria-describedby="emailHelp" placeholder="Ingrese el logo" required wire:model.defer="logo">
                        </div>
                        <div class="form-group">
                            <label for="paisesprticipantesedit">Paises Participantes:</label>
                            <input type="text" class="form-control" id="paisesprticipantesedit" aria-describedby="emailHelp" placeholder="Ingrese los Paises participantes" required wire:model.defer="paisesprticipantes">
                        </div>
                        <div class="form-group">
                            <label for="urledit">Enlace:</label>
                            <input type="text" class="form-control" id="urledit" aria-describedby="emailHelp" placeholder="Ingrese la url" required wire:model.defer="url">
                        </div>

                        <table class="table" id="editObjetivo">
                            <thead>
                                <tr>
                                    <th>Objetivos</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($objetivoRed as $index => $obj)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model="objetivoRed.{{$index}}.objetivo" placeholder="Ingrese el objetivo" required></textarea></td>
                                    @if(count($objetivoRed)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeEditObjetivo({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addObjetivo">+ agregar otro objetivo</button>
                            </div>
                        </div>

                        <table class="table" id="editActividad">
                            <thead>
                                <tr>
                                    <th>Actividades</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($actividades as $index => $resp)
                                <tr>
                                    <td><textarea class="form-control" rows="2" wire:model="actividades.{{$index}}.actividad" placeholder="Ingrese la actividad" required></textarea></td>
                                    @if(count($actividades)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeEditActividad({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addActividad">+ agregar otra Actividad</button>
                            </div>
                        </div>
                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editRed">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>