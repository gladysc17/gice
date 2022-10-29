<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Publicaciones</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex flex-row-reverse my-3">
                
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#crearPublicacion" wire:click="resetValues()">crear Publicacion</button>
               
            </div>

            <div class="table-responsive">  
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Tipología</th>
                            <th>Titulo</th>
                            <th>Año</th>
                            <th>Referencia</th>
                            <th>Url</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($publicacion))
                        @foreach($publicacion as $publi)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$publi->tipologia}}</td>
                            <td>{{$publi->titulo}}</td>
                            <td>{{$publi->fecha}}</td>
                            <td>{{$publi->referencia}}</td>
                            <td> <a href="{{ asset('uploads').'/'.$publi->link}}" target="_blank">Ver PDF</a></td>
                            <td>
                                <button class="btn btn-warning" type="button" wire:click="edit({{$publi->id}})" data-toggle="modal" data-target="#editPublicacion">Editar</button>
                                <button class="btn btn-danger" type="button" onclick="confirm('Esta seguro de borrar la publicacion?') || event.stopImmediatePropagation()" wire:click="destroy({{$publi->id}})">Borrar</button>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <p>No hay publicaciones registrados</p>
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
    <div class="modal fade" id="crearPublicacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Publicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newPublicacion" wire:submit.prevent="save">
                         <div class="form-group">
                            <label for="tipologia">Tipologia:</label>
                            <input type="text" class="form-control" id="tipologiaPublicacion" aria-describedby="emailHelp" placeholder="Ingrese la tipologia" required wire:model.defer="tipologia">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Titulo:</label>
                            <input type="text" class="form-control" id="tituloPublicacion" aria-describedby="emailHelp" placeholder="Ingrese el titulo" required wire:model.defer="titulo">
                        </div>
                        <div class="form-group">
                            <label for="fecha">Año:</label>
                            <input type="text" class="form-control" id="fechaPublicacion" aria-describedby="emailHelp" placeholder="Ingrese la fecha" required wire:model.defer="fecha">
                        </div>
                        <div class="form-group">
                            <label for="referencia">Referencia:</label>                            
                            <input type="text" class="form-control" name="referencia" aria-describedby="emailHelp" placeholder="Ingrese la referencia" required wire:model.defer="referencia">
                        </div>
                        <div class="form-group">
                            <div wire:loading wire:target="link">Uploading...</div>
                            @if($link)
                                PDF cargado correctamente
                            @endif
                            <label for="url">PDF:</label>
                            <input type="file" class="form-control" id="url" accept=".pdf" aria-describedby="emailHelp" placeholder="Ingrese la url" required wire:model.defer="link">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="resetValues()">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="newPublicacion" @if(!$link) disabled @endif>Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="editPublicacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Publicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editPublicacionForm" wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="tipologiaedit">Tipologia:</label>
                            <input type="text" class="form-control" id="tipologiaedit" aria-describedby="emailHelp" placeholder="Ingrese la tipologia" required wire:model.defer="tipologia">
                        </div>
                        <div class="form-group">
                            <label for="tituloedit">Titulo:</label>
                            <input type="text" class="form-control" id="tituloedit" aria-describedby="emailHelp" placeholder="Ingrese el titulo" required wire:model.defer="titulo">
                        </div>
                        <div class="form-group">
                            <label for="fechaedit">Año:</label>
                            <input type="text" class="form-control" id="fechaedit" aria-describedby="emailHelp" placeholder="Ingrese el año" required wire:model.defer="fecha">
                        </div>
                        <div class="form-group">
                            <label for="referenciaedit">Referencia:</label>
                            <input type="text" class="form-control" id="referenciaedit" aria-describedby="emailHelp" placeholder="Ingrese la referencia" required wire:model.defer="referencia">
                        </div>
                        <div class="form-group">
                        <div wire:loading wire:target="link">Uploading...</div>
                            @if($link)
                                PDF cargado correctamente
                            @endif
                            <label for="urledit">PDF:</label>
                            <input type="file" class="form-control" id="urledit" aria-describedby="emailHelp" accept=".pdf" placeholder="suba el pdf" required wire:model.defer="link">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="resetValues()">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="editPublicacionForm" @if(!$link) disabled @endif>Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>