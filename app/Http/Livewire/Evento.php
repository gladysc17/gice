<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\Evento as even;

class Evento extends Component
{

    public $evento;
    public $nombre;
    public $lema;
    public $fecha;
    public $lugar;
    public $programacion;
    public $afiche;
    public $invitados;
    public $formatos;
    public $memorias;
    public $registro;
    public $tipo;
    public $editEvento;

    public function save()
    {
        even::create(['nombre' => $this->nombre, 'lema'=> $this->lema, 'fecha'=> $this->fecha, 
        'lugar'=> $this->lugar, 'programacion'=> $this->programacion, 'afiche'=> $this->afiche,
        'invitados'=> $this->invitados, 'formatos'=> $this->formatos, 'memorias'=> $this->memorias,
        'registro'=> $this->registro, 'tipo'=> $this->tipo,]);
        $this->emit('evento registrado');
        $this->reset();
    }

    public function edit($id)
    {
        $this->editEvento = even::find($id);
        $this->nombre = $this->editEvento->nombre;
        $this->lema = $this->editEvento->lema;
        $this->fecha = $this->editEvento->fecha;
        $this->lugar = $this->editEvento->lugar;
        $this->programacion = $this->editEvento->programacion;
        $this->afiche = $this->editEvento->afiche;
        $this->invitados = $this->editEvento->invitados;
        $this->formatos = $this->editEvento->formatos;    
        $this->memorias = $this->editEvento->memorias;
        $this->registro = $this->editEvento->registro;
        $this->tipo = $this->editEvento->tipo;

    }

    public function update()
    {
        even::where('id', $this->editEvento->id)->update([
            'nombre'=>$this->nombre,
            'lema' => $this->lema,
            'fecha' => $this->fecha,
            'lugar' => $this->lugar,
            'programacion' => $this->programacion,
            'afiche' => $this->afiche,
            'invitados' => $this->invitados,
            'formatos' => $this->formatos,
            'memorias' => $this->memorias,
            'tipo' => $this->tipo,

        ]);
        $this->reset();
        $this->emit('evento editado');
    }

    public function destroy($id)
    {
        even::destroy($id);       
        $this->emit('evento borrado');
    }

    public function render()
    {
        $this->evento = even::all();
        return view('livewire.evento');
    }
}
