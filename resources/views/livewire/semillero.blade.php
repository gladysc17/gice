<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semillero</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearSemillero">Crear Semillero</button>
               
            </div>

            <div class="table-responsive">  
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Sigla</th>
                            <th>Nombre</th>
                            <th>Fecha Creación</th>
                            <th>Objeto del semillero</th>
                            <th>Logo</th>
                            <th>Director</th>
                            <th>Correo</th>
                            <th>Caracteristicas</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($semillero))
                        @foreach($semillero as $semi)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$semi->sigla}}</td>
                            <td>{{$semi->nombre}}</td>
                            <td>{{$semi->fechacreacion}}</td>
                            <td>{{$semi->objeto}}</td>
                            <td>{{$semi->logo}}</td>
                            <td>{{$semi->director}}</td>
                            <td>{{$semi->correo}}</td>
                            <td>{{$semi->caracteristicas}}</td>
                            <td>
                                <button class="btn btn-warning" type="button" wire:click="edit({{$semi->id}})" data-toggle="modal" data-target="#editarSemillero">Editar</button>
                                <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar el Semillero?') || event.stopImmediatePropagation()" wire:click="destroy({{$semi->id}})">Borrar</button>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <p>No hay semilleros registrados</p>
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
    <div class="modal fade" id="crearSemillero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Semillero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newSemillero" wire:submit.prevent="save">
                         <div class="form-group">
                            <label for="sigla">Sigla:</label>
                            <input type="text" class="form-control" id="siglaSemillero" aria-describedby="emailHelp" placeholder="Ingrese la sigla" required wire:model.defer="sigla">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombreSemillero" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="fechacreacion">Fecha de creacion:</label>
                            <input type="text" class="form-control" id="fechaSemillero" aria-describedby="emailHelp" placeholder="Ingrese la fecha de creación" required wire:model.defer="fechacreacion">
                        </div>
                        <div class="form-group">
                            <label for="objeto">Objeto:</label>                            
                            <textarea id="objeto" class="form-control" name="" rows="5" wire:model.defer="objeto" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo:</label>
                            <input type="text" class="form-control" id="logoSemillero" aria-describedby="emailHelp" placeholder="Ingrese el logo" required wire:model.defer="logo">
                        </div>
                        <div class="form-group">
                            <label for="director">Director:</label>
                            <input type="text" class="form-control" id="directorSemillero" aria-describedby="emailHelp" placeholder="Ingrese el director" required wire:model.defer="director">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico:</label>
                            <input type="text" class="form-control" id="correoSemillero" aria-describedby="emailHelp" placeholder="Ingrese el correo electronico" required wire:model.defer="correo">
                        </div>
                        
                        <div class="form-group">
                            <label for="caracteristicas">Actividades</label>                            
                            <textarea id="caracteristicas" class="form-control" name="" rows="5" wire:model.defer="caracteristicas" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newSemillero">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editarSemillero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Semillero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editSemillero" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="siglaedit">Sigla:</label>
                            <input type="text" class="form-control" id="siglaedit" aria-describedby="emailHelp" placeholder="Ingrese la sigla" required wire:model.defer="sigla">
                        </div>
                        <div class="form-group">
                            <label for="nombreedit">Nombre:</label>
                            <input type="text" class="form-control" id="nombreedit" aria-describedby="emailHelp" placeholder="Ingrese el nombre" required wire:model.defer="nombre">
                        </div>
                        <div class="form-group">
                            <label for="fechaedit">Fecha de Creación:</label>
                            <input type="text" class="form-control" id="fechaedit" aria-describedby="emailHelp" placeholder="Ingrese la fecha" required wire:model.defer="fechacreacion">
                        </div>
                        <div class="form-group">
                            <label for="objetoedit">Objeto:</label>
                            <input type="text" class="form-control" id="objetoedit" aria-describedby="emailHelp" placeholder="Ingrese el objeto" required wire:model.defer="objeto">
                        </div>
                        <div class="form-group">
                            <label for="objetoedit">Objeto:</label>
                            <textarea class="form-control" id="objetoedit" rows="5" placeholder="Ingrese el objeto" required wire:model.defer="objeto"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="logoedit">Logo:</label>
                            <input type="text" class="form-control" id="logoedit" aria-describedby="emailHelp" placeholder="Ingrese el logo" required wire:model.defer="logo">
                        </div>
                        <div class="form-group">
                            <label for="directoredit">Director:</label>
                            <input type="text" class="form-control" id="directoredit" aria-describedby="emailHelp" placeholder="Ingrese el director" required wire:model.defer="director">
                        </div>
                        <div class="form-group">
                            <label for="correoedit">Correo:</label>
                            <input type="text" class="form-control" id="correoedit" aria-describedby="emailHelp" placeholder="Ingrese el correo" required wire:model.defer="correo">
                        </div>
                        <div class="form-group">
                            <label for="caracteristicasedit">Caracteristicas:</label>
                            <textarea class="form-control" id="caracteristicasedit" rows="5" placeholder="Ingrese la descripcion" required wire:model.defer="caracteristicas"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editSemillero">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>