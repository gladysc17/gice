<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio;

class ServicioFront extends Component
{

    public $servicios;
    public $servicio;

    public function mount(){
        $this->servicios= Servicio::all();
    }

    public function selected($id){
        $this->servicio=Servicio::find($id);
        //dd($this->servicio);
    }

    public function render()
    {
        return view('livewire.servicio-front');
    }
}
