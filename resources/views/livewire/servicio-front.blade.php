<div class="row p-lg-5 pb-5 align-items-center" style="background-color: #b43432;" id="servicios">
    <div class="col-12 my-4 wow fadeIn">
        <h1 class="text-center font-weight-bold white-text">Servicios</h1>
    </div>
    @if($servicios->count())
    @foreach($servicios as $serv)
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$serv->nombre}}</h5>
                <p class="card-text">{{Str::limit($serv->descripcion, 230)}}</p>
                <button class="btn btn-danger" type="button" wire:click="selected({{$serv->id}})" data-toggle="modal" data-target="#serviceModal">Ver Mas</button>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    <!-- Modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @if($servicio)
                    <h5 class="modal-title" id="exampleModalLabel">{{$servicio->nombre}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @endif
                </div>
                <div class="modal-body">
                    @if($servicio)
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h3>Descripcion:</h3>
                                <p>{{$servicio->descripcion}}</p>
                            </div>
                            <div class="col-12">
                                <h3>Componentes:</h3>
                                <ul class="list-group">
                                    @foreach($servicio->componentes as $comp)
                                    <il class="list-group-item">{{$comp->componente}}</il>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>