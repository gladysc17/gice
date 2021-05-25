<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Valor as valorcito;

class Valor extends Component
{
    public $valores;
    public $nombre;
    public $selected;

    public function save()
    {
        valorcito::create(['valor' => $this->nombre]);
        $this->emit('valor creado');
        $this->reset('nombre');
    }

    public function destroy($id)
    {
        valorcito::destroy($id);
        $this->emit('sector borrado');
    }

    public function edit($id)
    {
        $this->nombre = valorcito::find($id)->valor;
        $this->selected = $id;
    }

    public function update()
    {
        //$this->nombre = Sector::find($this->selected)->nombre;
        valorcito::find($this->selected)->update(['valor' => $this->nombre]);
        $this->reset(['nombre', 'selected']);
        $this->emit('valor editado');
    }

    public function render()
    {
        $this->valores = valorcito::all();
        return view('livewire.valor');
    }
}
