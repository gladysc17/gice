<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Proyecto</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearProyecto">Crear Proyecto</button>
               
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>logo</th>
                        <th>Descripción</th>
                        <th>Ejes</th>
                        <th>Objetivos</th>
                        <th>Responsables</th>
                        <th>Resultados</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($proyecto))
                    @foreach($proyecto as $pro)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$pro->nombre}}</td>
                        <td>{{$pro->logo}}</td>
                        <td>{{$pro->descripcion}}</td>
                        <td>{{$pro->ejeProyecto->count()}}</td>
                        <td>{{$pro->objetivoProyecto->count()}}</td>
                        <td>{{$pro->responsables->count()}}</td>
                        <td>{{$pro->resultados->count()}}</td>
                        

                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$pro->id}})" data-toggle="modal" data-target="#editarProyecto">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Proyecto?') || event.stopImmediatePropagation()" wire:click="destroy({{$pro->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay proyectos registrados</p>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newProyecto" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombreProyecto" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo:</label>
                            <input type="text" class="form-control" id="logoProyecto" aria-describedby="emailHelp" placeholder="Ingrese el logo" required wire:model.defer="logo">
                        </div>
                        <div class="form-group">
                            <label for="director">Descripción:</label>
                            <textarea class="form-control" id="descripcionProyecto" rows="5" placeholder="Ingrese la descripcion" required wire:model.defer="descripcion"></textarea>
                        </div>

                        <table class="table" id="createEje">
                            <thead>
                                <tr>
                                    <th>Ejes</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ejeProyecto as $index => $eje)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model.defer="ejeProyecto.{{$index}}.eje" placeholder="Ingrese el eje" required></textarea></td>
                                    @if(count($ejeProyecto)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeEje({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addEje">+ agregar otro eje</button>
                            </div>
                        </div>

                        <table class="table" id="createObjetivo">
                            <thead>
                                <tr>
                                    <th>Objetivos</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($objetivoProyecto as $index => $obj)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model.defer="objetivoProyecto.{{$index}}.objetivo" placeholder="Ingrese el objetivo" required></textarea></td>
                                    @if(count($objetivoProyecto)>1)
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

                        <table class="table" id="createResponsable">
                            <thead>
                                <tr>
                                    <th>Responsables</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($responsables as $index => $resp)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model.defer="responsables.{{$index}}.responsable" placeholder="Ingrese el Responsable" required></textarea></td>
                                    @if(count($responsables)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeResponsable({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addResponsable">+ agregar otro Responsable</button>
                            </div>
                        </div>

                        <table class="table" id="createResultado">
                            <thead>
                                <tr>
                                    <th>Resultados</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($resultados as $index => $resu)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model.defer="resultados.{{$index}}.resultado" placeholder="Ingrese el resultado" required></textarea></td>
                                    @if(count($resultados)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeResultado({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addResultado">+ agregar otro Resultado</button>
                            </div>
                        </div>
                
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newProyecto">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editProyecto" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreedit">Nombre:</label>
                            <input type="text" class="form-control" id="nombreedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="logoedit">Logo:</label>
                            <input type="text" class="form-control" id="logoedit" aria-describedby="emailHelp" placeholder="Ingrese el logo" required wire:model.defer="logo">
                        </div>
                        <div class="form-group">
                            <label for="descripcionedit">Descripción:</label>
                            <textarea class="form-control" id="descripcionedit" rows="5" placeholder="Ingrese la descripcion" required wire:model.defer="descripcion"></textarea>
                        </div>

                        <table class="table" id="editEjes">
                            <thead>
                                <tr>
                                    <th>Ejes</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ejeProyecto as $index => $ejep)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model="ejeProyecto.{{$index}}.eje" placeholder="Ingrese el eje" required></textarea></td>
                                    @if(count($ejeProyecto)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeEditEje({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addEje">+ agregar otro eje</button>
                            </div>
                        </div>

                        <table class="table" id="editObjetivo">
                            <thead>
                                <tr>
                                    <th>Objetivos</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($objetivoProyecto as $index => $obj)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model="objetivoProyecto.{{$index}}.objetivo" placeholder="Ingrese el objetivo" required></textarea></td>
                                    @if(count($objetivoProyecto)>1)
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

                        <table class="table" id="editResponsable">
                            <thead>
                                <tr>
                                    <th>Responsables</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($responsables as $index => $resp)
                                <tr>
                                    <td><textarea class="form-control" rows="2" wire:model="responsables.{{$index}}.responsable" placeholder="Ingrese el responsable" required></textarea></td>
                                    @if(count($responsables)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeEditResponsable({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addResponsable">+ agregar otro Responable</button>
                            </div>
                        </div>

                        <table class="table" id="editResultado">
                            <thead>
                                <tr>
                                    <th>Resultados</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($resultados as $index => $resu)
                                <tr>
                                    <td><textarea class="form-control" rows="3" wire:model="resultados.{{$index}}.resultado" placeholder="Ingrese el resultado" required></textarea></td>
                                    @if(count($resultados)>1)
                                    <td><button class="btn btn-danger" type="button" wire:click.prevent="removeEditResultado({{$index}})">Borrar</button></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-secondary" wire:click.prevent="addResultado">+ agregar otro resultado</button>
                            </div>
                        </div>
                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editProyecto">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>