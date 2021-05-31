<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Eventos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearEvento">Crear Evento</button>
               
            </div>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Lema</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                        <th>Programacion</th>
                        <th>Afiche</th>
                        <th>Invitados</th>
                        <th>Formatos</th>
                        <th>Memorias</th>
                        <th>Registro</th>
                        <th>Tipo</th>
                        <th>Accion</th>                        

                    </tr>
                </thead>
                <tbody>
                    @if(count($evento))
                    @foreach($evento as $even)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$even->nombre}}</td>
                        <td>{{$even->lema}}</td>
                        <td>{{$even->fecha}}</td>
                        <td>{{$even->lugar}}</td>
                        <td>{{$even->programacion}}</td>
                        <td>{{$even->afiche}}</td>
                        <td>{{$even->invitados}}</td>
                        <td>{{$even->formatos}}</td>
                        <td>{{$even->memorias}}</td>
                        <td>{{$even->registro}}</td>
                        <td>{{$even->tipo}}</td>
                        <td>
                            <button class="btn btn-warning" type="button" wire:click="edit({{$even->id}})" data-toggle="modal" data-target="#editarEvento">Editar</button>
                            <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Evento?') || event.stopImmediatePropagation()" wire:click="destroy({{$even->id}})">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No hay eventos registrados</p>
                    @endif
                </tbody>
            </table>
            
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="crearEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newEvento" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombreEvento" aria-describedby="emailHelp" placeholder="Ingrese el nombre completo" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="lema">Lema:</label>
                            <input type="text" class="form-control" id="lemaEvento" aria-describedby="emailHelp" placeholder="Ingrese el lema" required wire:model.defer="lema">
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="text" class="form-control" id="fechaEvento" aria-describedby="emailHelp" placeholder="Ingrese la fecha" required wire:model.defer="fecha">
                        </div>
                        <div class="form-group">
                            <label for="lugar">Lugar</label>
                            <input type="text" class="form-control" id="lugarEvento" aria-describedby="emailHelp" placeholder="Ingrese el lugar" required wire:model.defer="lugar">
                        </div>
                        <div class="form-group">
                            <label for="programacion">Programacion:</label>
                            <input type="text" class="form-control" id="programacionEvento" aria-describedby="emailHelp" placeholder="Ingrese la programacion" required wire:model.defer="programacion">
                        </div>
                        <div class="form-group">
                            <label for="afiche">Afiche</label>
                            <input type="text" class="form-control" id="aficheEvento" aria-describedby="emailHelp" placeholder="Ingrese el afiche" required wire:model.defer="afiche">
                        </div>
                        <div class="form-group">
                            <label for="invitados">Invitados</label>
                            <input type="text" class="form-control" id="invitadosEvento" aria-describedby="emailHelp" placeholder="Ingrese el invitados" required wire:model.defer="invitados">
                        </div>
                        <div class="form-group">
                            <label for="formatos">Formatos</label>
                            <input type="text" class="form-control" id="formatosEvento" aria-describedby="emailHelp" placeholder="Ingrese el formatos" required wire:model.defer="formatos">
                        </div>
                        <div class="form-group">
                            <label for="memorias">Memorias</label>
                            <input type="text" class="form-control" id="memoriasEvento" aria-describedby="emailHelp" placeholder="Ingrese el memorias" required wire:model.defer="memorias">
                        </div>
                        <div class="form-group">
                            <label for="registro">Registro</label>
                            <input type="text" class="form-control" id="registroEvento" aria-describedby="emailHelp" placeholder="Ingrese el registro" required wire:model.defer="registro">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text" class="form-control" id="tipoEvento" aria-describedby="emailHelp" placeholder="Ingrese el tipo de evento" required wire:model.defer="tipo">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newEvento">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editEvento" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="nombreedit">Nombre:</label>
                            <input type="text" class="form-control" id="nombreedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="lemaedit">Lema:</label>
                            <input type="text" class="form-control" id="lemaedit" aria-describedby="emailHelp" placeholder="Ingrese el lema" required wire:model.defer="lema">
                        </div>
                        <div class="form-group">
                            <label for="fechadit">Fecha:</label>
                            <input type="text" class="form-control" id="fechaedit" aria-describedby="emailHelp" placeholder="Ingrese la fecha" required wire:model.defer="fecha">
                        </div>
                        <div class="form-group">
                            <label for="lugaredit">Lugar:</label>
                            <input type="text" class="form-control" id="lugaredit" aria-describedby="emailHelp" placeholder="Ingrese el lugar" required wire:model.defer="lugar">
                        </div>
                        <div class="form-group">
                            <label for="programacionedit">Programacion:</label>
                            <input type="text" class="form-control" id="programacionedit" aria-describedby="emailHelp" placeholder="Ingrese la programacion" required wire:model.defer="programacion">
                        </div>
                        <div class="form-group">
                            <label for="aficheedit">Afiche:</label>
                            <input type="text" class="form-control" id="aficheedit" aria-describedby="emailHelp" placeholder="Ingrese el afiche" required wire:model.defer="afiche">
                        </div>
                        <div class="form-group">
                            <label for="invitadosedit">Invitados:</label>
                            <input type="text" class="form-control" id="invitadosedit" aria-describedby="emailHelp" placeholder="Ingrese los invitados" required wire:model.defer="invitados">
                        </div>
                        <div class="form-group">
                            <label for="formatosedit">Formatos:</label>
                            <input type="text" class="form-control" id="formatosedit" aria-describedby="emailHelp" placeholder="Ingrese los formatos" required wire:model.defer="formatos">
                        </div>
                        <div class="form-group">
                            <label for="memoriasedit">Memorias:</label>
                            <input type="text" class="form-control" id="memoriasedit" aria-describedby="emailHelp" placeholder="Ingrese las memorias" required wire:model.defer="memorias">
                        </div>
                        <div class="form-group">
                            <label for="registroedit">Registro:</label>
                            <input type="text" class="form-control" id="registroedit" aria-describedby="emailHelp" placeholder="Ingrese el enlace" required wire:model.defer="registro">
                        </div>
                        <div class="form-group">
                            <label for="tipoedit">Tipo:</label>
                            <input type="text" class="form-control" id="tipoedit" aria-describedby="emailHelp" placeholder="Ingrese el tipo de evento" required wire:model.defer="tipo">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editEvento">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
