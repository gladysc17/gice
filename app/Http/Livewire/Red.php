<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Red as re;

class Red extends Component
{   
    public $red;
    public $nombre;
    public $descripcion;
    public $editRed;
    

    public function destroy($id)
    {
        re::destroy($id);       
        $this->emit('Red borrada');
    }

    public function edit($id)
    {
        $this->editRed = re::find($id);
        $this->nombre = $this->editRed->nombre;
        $this->descripcion = $this->editRed->descripcion;


    }

    public function update()
    {
        re::where('id', $this->editRed->id)->update([
            'nombre'=>$this->nombre,
            'descripcion'=>$this->descripcion,

        ]);
        $this->reset();
        $this->emit('Red editada');
    }

    public function save()
    {
        re::create(['nombre' => $this->nombre, 'descripcion'=> $this->descripcion]);
        $this->emit('Red registrada');
        $this->reset();
    }

    public function render()
    {   
        $this->red = re::all();
        return view('livewire.red');
    }
}
