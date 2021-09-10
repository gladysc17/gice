<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Proyecto as pro;

class Proyecto extends Component
{
    public $proyecto;
    public $nombre;
    public $descripcion;
    public $editProyecto;
    

    public function destroy($id)
    {
        pro::destroy($id);       
        $this->emit('Proyecto borrado');
    }

    public function edit($id)
    {
        $this->editProyecto = pro::find($id);
        $this->nombre = $this->editProyecto->nombre;
        $this->descripcion = $this->editProyecto->descripcion;


    }

    public function update()
    {
        pro::where('id', $this->editProyecto->id)->update([
            'nombre'=>$this->nombre,
            'descripcion'=>$this->descripcion,

        ]);
        $this->reset();
        $this->emit('Proyecto editado');
    }

    public function save()
    {
        pro::create(['nombre' => $this->nombre, 'descripcion'=> $this->descripcion]);
        $this->emit('Proyecto registrado');
        $this->reset();
    }

    public function render()
    {
        $this->proyecto = pro::all();
        return view('livewire.proyecto');
    }
}
