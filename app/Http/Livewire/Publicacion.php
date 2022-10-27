<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Publicacion as pub;
class Publicacion extends Component
{
    public $publicacion;
    public $tipologia;
    public $titulo;
    public $fecha;
    public $referencia;
    public $link;    
    public $editPublicacion;

    public function destroy($id)
    {
        pub::destroy($id);       
        $this->emit('publicacion borrada');
    }

    public function edit($id)
    {
        $this->editPublicacion = pub::find($id);
        $this->tipologia = $this->editPublicacion->tipologia;
        $this->titulo = $this->editPublicacion->titulo;
        $this->fecha = $this->editPublicacion->fecha;
        $this->referencia = $this->editPublicacion->referencia;
        $this->link = $this->editPublicacion->link;

    }

    public function update()
    {
        pub::where('id', $this->editPublicacion->id)->update([
            'tipologia'=>$this->tipologia,
            'titulo'=>$this->titulo,
            'fecha'=>$this->fecha,
            'referencia'=>$this->referencia,
            'link'=>$this->link,

        ]);
        $this->reset();
        $this->emit('publicacion editada');
    }

    public function save()
    {
        pub::create(['tipologia' => $this->tipologia, 'titulo'=> $this->titulo, 'fecha'=> $this->fecha, 
        'referencia'=> $this->referencia, 'link'=> $this->link]);
        $this->emit('publicacion registrada');
        $this->reset();
    }

    public function render()
    {
        $this->publicacion = pub::all();
        return view('livewire.publicacion');
    }
}
