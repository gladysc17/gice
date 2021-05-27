<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabla de Investigadores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearInvestigador">Crear Investigador</button>
               
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Linea de Investigación</th>
                        <th>Departamento Academico</th>
                        <th>Perfil CvLAC</th>
                        <th>Orcid</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($investigador))
                    @foreach($investigador as $inv)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$inv->nombre}}</td>
                        <td>{{$inv->correo}}</td>
                        <td>{{$inv->linea}}</td>
                        <td>{{$inv->departamento}}</td>
                        <td>{{$inv->cvlac}}</td>
                        <td>{{$inv->orcid}}</td>
                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$inv->id}})" data-toggle="modal" data-target="#editarInvestigador">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Investigador?') || event.stopImmediatePropagation()" wire:click="destroy({{$inv->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay Investigadores registrados</p>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearInvestigador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Investigador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newInvestigador" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombreInvestigador" aria-describedby="emailHelp" placeholder="Ingrese el nombre completo" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico:</label>
                            <input type="text" class="form-control" id="correoInvestigador" aria-describedby="emailHelp" placeholder="Ingrese el correo electronico" required wire:model.defer="correo">
                        </div>
                        <div class="form-group">
                            <label for="linea">Linea de Investigación:</label>
                            <input type="text" class="form-control" id="lineaInvestigador" aria-describedby="emailHelp" placeholder="Ingrese la linea de investigacion" required wire:model.defer="linea">
                        </div>
                        <div class="form-group">
                            <label for="departamento">Departamento Academico</label>
                            <input type="text" class="form-control" id="departamentoInvestigador" aria-describedby="emailHelp" placeholder="Ingrese el departamento academico" required wire:model.defer="departamento">
                        </div>
                        <div class="form-group">
                            <label for="cvlac">Enlace CvLAC:</label>
                            <input type="text" class="form-control" id="cvlacInvestigador" aria-describedby="emailHelp" placeholder="Ingrese el enlace del perfil de cvlac" required wire:model.defer="cvlac">
                        </div>
                        <div class="form-group">
                            <label for="orcid">Orcid</label>
                            <input type="text" class="form-control" id="orcidInvestigador" aria-describedby="emailHelp" placeholder="Ingrese el enlace de orcid" required wire:model.defer="orcid">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newInvestigador">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarInvestigador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Investigador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editInvestigador" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreedit">Nombre:</label>
                            <input type="text" class="form-control" id="nombreedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="correoedit">Correo:</label>
                            <input type="text" class="form-control" id="correoedit" aria-describedby="emailHelp" placeholder="Ingrese el correo" required wire:model.defer="correo">
                        </div>
                        <div class="form-group">
                            <label for="lineaedit">Linea de Investigación:</label>
                            <input type="text" class="form-control" id="lineaedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="linea">
                        </div>
                        <div class="form-group">
                            <label for="departamentoedit">Departamento:</label>
                            <input type="text" class="form-control" id="departamentoedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="departamento">
                        </div>
                        <div class="form-group">
                            <label for="cvlacedit">Cvlac:</label>
                            <input type="text" class="form-control" id="cvlacedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="cvlac">
                        </div>
                        <div class="form-group">
                            <label for="orcidedit">Orcid:</label>
                            <input type="text" class="form-control" id="orcidedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="orcid">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editInvestigador">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>