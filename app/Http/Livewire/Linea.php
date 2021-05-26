<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\LineaInvestigacion as linesita;

class Linea extends Component
{
    public $lineas;
    public $nombre;
    public $selected;

    public function save()
    {
        linesita::create(['linea' => $this->nombre]);
        $this->emit('linea creada');
        $this->reset('nombre');
    }

    public function destroy($id)
    {
        linesita::destroy($id);
        $this->emit('linea borrada');
    }

    public function edit($id)
    {
        $this->nombre = linesita::find($id)->linea;
        $this->selected = $id;
    }

    public function update()
    {
        //$this->nombre = Linea::find($this->selected)->nombre;
        linesita::find($this->selected)->update(['linea' => $this->nombre]);
        $this->reset(['nombre', 'selected']);
        $this->emit('linea editada');
    }

    public function render()
    {
        $this->lineas = linesita::all();
        return view('livewire.linea');
    }
}
