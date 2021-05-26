<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Objetivo as objetive;

class Objetivo extends Component
{
    public $objetivos;
    public $nombre;
    public $selected;

    public function save()
    {
        objetive::create(['objetivo' => $this->nombre]);
        $this->emit('objetivo creado');
        $this->reset('nombre');
    }

    public function destroy($id)
    {
        objetive::destroy($id);
        $this->emit('objetivo borrado');
    }

    public function edit($id)
    {
        $this->nombre = objetive::find($id)->objetivo;
        $this->selected = $id;
    }

    public function update()
    {
        //$this->nombre = Objetivo::find($this->selected)->nombre;
        objetive::find($this->selected)->update(['objetivo' => $this->nombre]);
        $this->reset(['nombre', 'selected']);
        $this->emit('objetivo editado');
    }

    public function render()
    {
        $this->objetivos = objetive::all();
        return view('livewire.objetivo');
    }
}
