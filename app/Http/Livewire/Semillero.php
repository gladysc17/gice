<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Semillero as semi;

class Semillero extends Component
{

    public $semillero;
    public $nombre;
    public $director;
    public $correo;
    public $caracteristicas;
    public $editSemillero;
    

    public function destroy($id)
    {
        semi::destroy($id);       
        $this->emit('Semillero borrado');
    }

    public function edit($id)
    {
        $this->editSemillero = semi::find($id);
        $this->nombre = $this->editSemillero->nombre;
        $this->director = $this->editSemillero->director;
        $this->correo = $this->editSemillero->correo;
        $this->caracteristicas = $this->editSemillero->caracteristicas;

    }

    public function update()
    {
        semi::where('id', $this->editSemillero->id)->update([
            'nombre'=>$this->nombre,
            'director'=>$this->director,
            'correo'=>$this->correo,
            'caracteristicas'=>$this->caracteristicas,
        ]);
        $this->reset();
        $this->emit('Semillero editado');
    }

    public function save()
    {
        semi::create(['nombre' => $this->nombre, 'director'=> $this->director, 
        'correo'=> $this->correo, 'caracteristicas'=> $this->caracteristicas]);
        $this->emit('Semillero registrado');
        $this->reset();
    }


    public function render()
    {
        $this->semillero = semi::all();
        return view('livewire.semillero');
    }
}
