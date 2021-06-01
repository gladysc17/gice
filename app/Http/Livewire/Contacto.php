<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Contacto as cont;

class Contacto extends Component
{

    public $contacto;
    public $nombre;
    public $correo;
    public $telefono;
    public $direccion;
    public $editContacto;


    public function destroy($id)
    {
        cont::destroy($id);       
        $this->emit('contacto borrado');
    }

    public function edit($id)
    {
        $this->editContacto = cont::find($id);
        $this->nombre = $this->editContacto->nombre;
        $this->correo = $this->editContacto->correo;
        $this->telefono = $this->editContacto->telefono;
        $this->direccion = $this->editContacto->direccion;

    }

    public function update()
    {
        cont::where('id', $this->editContacto->id)->update([
            'nombre'=>$this->nombre,
            'correo'=>$this->correo,
            'telefono'=>$this->telefono,
            'direccion'=>$this->direccion,

        ]);
        $this->reset();
        $this->emit('contacto editado');
    }

    public function save()
    {
        cont::create(['nombre' => $this->nombre, 'correo'=> $this->correo, 'telefono'=> $this->telefono, 
        'direccion'=> $this->direccion]);
        $this->emit('contacto registrado');
        $this->reset();
    }

    public function render()
    {
        $this->contacto = cont::all();
        return view('livewire.contacto');
    }
}
