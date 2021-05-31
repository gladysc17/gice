<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\LineaInvestigacion as lin;

class Linea extends Component
{
    public $lineas;
    public $linea;
    public $objetivo;
    public $logro;
    public $efecto;
    public $editLinea;

    public function save()
    {
        lin::create(['linea' => $this->linea, 'objetivo'=> $this->objetivo, 'logro'=> $this->logro, 
        'efecto'=> $this->efecto]);
        $this->emit('linea creada');
        $this->reset();
    }

    public function destroy($id)
    {
        lin::destroy($id);
        $this->emit('linea borrada');
    }

    public function edit($id)
    {
        $this->editLinea = lin::find($id);
        $this->linea = $this->editLinea->linea;
        $this->objetivo = $this->editLinea->objetivo;
        $this->logro = $this->editLinea->logro;
        $this->efecto = $this->editLinea->efecto;

    }

    public function update()
    {
        lin::where('id', $this->editLinea->id)->update([
            'linea'=>$this->linea,
            'objetivo'=>$this->objetivo,
            'logro'=>$this->logro,
            'efecto'=>$this->efecto,
        ]);
        $this->reset();
        $this->emit('linea editada');
    }

    public function render()
    {
        $this->lineas = lin::all();
        return view('livewire.linea');
    }
}
