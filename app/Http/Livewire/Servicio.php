<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio as Service;
use App\Models\Componente as Componentecito;

class Servicio extends Component
{
    public $nombre;
    public $servicios;
    public $servicio;
    public $componente;
    public $componentes = [];
    public $deletedComponents = [];

    public function mount()
    {
        $this->componentes = [
            ['componente' => '']
        ];
    }

    public function addComponent()
    {
        $this->componentes[] = ['componente' => ''];
    }

    public function removeComponent($index)
    {
        unset($this->componentes[$index]);
        $this->componentes = array_values($this->componentes);
    }

    public function save()
    {
        $serv = Service::create(['nombre' => $this->nombre]);
        foreach ($this->componentes as $compo) {
            $serv->componentes()->create([
                'componente' => $compo['componente'],
            ]);
        }
        $this->emit('servicio creado');
        $this->reset();
    }

    public function destroy($id)
    {
        Service::destroy($id);
        $this->emit('servicio borrado');
    }

    public function edit($id)
    {
        unset($this->componentes);
        $this->componentes = [];
        $this->servicio = Service::find($id);
        $this->nombre = $this->servicio->nombre;
        foreach ($this->servicio->componentes as $compo) {
            //dd($compo->componente);
            $this->componentes[] = ['id' => $compo->id, 'componente' => $compo->componente];
        }
    }

    public function update()
    {
        $this->servicio->update(['nombre' => $this->nombre]);
        foreach ($this->deletedComponents as $comp) {
            Componentecito::destroy($comp['id']);
        }
        foreach ($this->componentes as $compo) {
            if (array_key_exists('id', $compo)) {
                Componentecito::find($compo['id'])->update(['componente' => $compo['componente']]);
            } else {
                $this->servicio->componentes()->create([
                    'componente' => $compo['componente'],
                ]);
            }
        }
        $this->emit('servicio editado');
        $this->reset();
    }

    public function removeEditComponent($index)
    {
        //dd($this->componentes);
        if (array_key_exists('id', $this->componentes[$index])) {
            $this->deletedComponents[] = ['id' => $this->componentes[$index]['id']];
        }

        unset($this->componentes[$index]);
        $this->componentes = array_values($this->componentes);
    }

    public function render()
    {
        $this->servicios = Service::all();
        return view('livewire.servicio');
    }
}
