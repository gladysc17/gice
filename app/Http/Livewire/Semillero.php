<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Semillero as semi;

class Semillero extends Component
{

    public $semillero;
    public $sigla;
    public $nombre;
    public $fechacreacion;
    public $objeto;
    public $logo;
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
        $this->sigla = $this->editSemillero->sigla;
        $this->nombre = $this->editSemillero->nombre;
        $this->fechacreacion = $this->editSemillero->fechacreacion;
        $this->objeto = $this->editSemillero->objeto;
        $this->logo = $this->editSemillero->logo;
        $this->director = $this->editSemillero->director;
        $this->correo = $this->editSemillero->correo;
        $this->caracteristicas = $this->editSemillero->caracteristicas;

    }

    public function update()
    {
        semi::where('id', $this->editSemillero->id)->update([
            'sigla'=>$this->sigla,
            'nombre'=>$this->nombre,
            'fechacreacion'=>$this->fechacreacion,
            'objeto'=>$this->objeto,
            'logo'=>$this->logo,
            'director'=>$this->director,
            'correo'=>$this->correo,
            'caracteristicas'=>$this->caracteristicas,
        ]);
        $this->reset();
        $this->emit('Semillero editado');
    }

    public function save()
    {
        semi::create(['sigla' => $this->sigla, 'nombre' => $this->nombre, 
        'fechacreacion' => $this->fechacreacion, 'objeto' => $this->objeto, 'logo' => $this->logo,
        'director'=> $this->director, 'correo'=> $this->correo, 'caracteristicas'=> $this->caracteristicas]);
        $this->emit('Semillero registrado');
        $this->reset();
    }


    public function render()
    {
        $this->semillero = semi::all();
        return view('livewire.semillero');
    }
}
