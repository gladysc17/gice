<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Red as re;
use App\Models\ObjetivoRed as objetives;
use App\Models\ActividadRed as activid;

class Red extends Component
{   
    public $red;
    public $nombre;
    public $descripcion;
    public $aniocreacion;
    public $tipovinculo;
    public $paisesprticipantes;
    public $url;
    public $logo;
    public $editRed;

    public $objetivoRed = [];
    public $deletedObjetivos = [];

    public $actividades = [];
    public $deletedActividad = [];
    
    public function mount()
    {
        $this->objetivoRed = [
            ['objetivo' => '']
        ];

        $this->actividades = [
            ['actividad' => '']
        ];
    }
    public function addObjetivo()
    {
        $this->objetivoRed[] = ['objetivo' => ''];
    }

    public function removeObjetivo($index)
    {
        unset($this->objetivoRed[$index]);
        $this->objetivoRed = array_values($this->objetivoRed);
    }

    public function addActividad()
    {
        $this->actividades[] = ['actividad' => ''];
    }

    public function removeActividad($index)
    {
        unset($this->actividadRed[$index]);
        $this->actividadRed = array_values($this->actividadRed);
    }

    public function destroy($id)
    {
        re::destroy($id);       
        $this->emit('Red borrada');
    }

    public function edit($id)
    {
        unset($this->objetivoRed);
        $this->objetivoRed = [];

        unset($this->actividades);
        $this->actividades = [];


        $this->editRed = re::find($id);
        $this->nombre = $this->editRed->nombre;
        $this->descripcion = $this->editRed->descripcion;
        $this->aniocreacion = $this->editRed->aniocreacion;
        $this->tipovinculo = $this->editRed->tipovinculo;
        $this->paisesprticipantes = $this->editRed->paisesprticipantes;
        $this->url = $this->editRed->url;
        $this->logo = $this->editRed->logo;

        foreach ($this->editRed->objetivoRed as $obj) {
            $this->objetivoRed[] = ['id' => $obj->id, 'objetivo' => $obj->objetivo];
        }

        foreach ($this->editRed->actividades as $act) {
            $this->actividades[] = ['id' => $act->id, 'actividad' => $act->actividad];
        }

    }

    public function update()
    {
        $this->editRed->update([
            'nombre'=>$this->nombre,
            'descripcion'=>$this->descripcion,
            'aniocreacion'=>$this->aniocreacion,
            'tipovinculo'=>$this->tipovinculo,
            'paisesprticipantes'=>$this->paisesprticipantes,
            'url'=>$this->url,
            'logo'=>$this->logo
        ]);

        foreach ($this->deletedObjetivos as $obj) {
            objetives::destroy($obj['id']);
        }
        foreach ($this->objetivoRed as $obj) {
            if (array_key_exists('id', $obj)) {
                objetives::find($obj['id'])->update(['objetivo' => $obj['objetivo']]);
            } else {
                $this->editRed->objetivoRed()->create([
                    'objetivo' => $obj['objetivo'],
                ]);
            }
        }

        foreach ($this->deletedActividad as $acti) {
            activid::destroy($acti['id']);
        }
        foreach ($this->actividades as $acti) {
            if (array_key_exists('id', $acti)) {
                activid::find($acti['id'])->update(['actividad' => $acti['actividad']]);
            } else {
                $this->editRed->actividades()->create([
                    'actividad' => $acti['actividad'],
                ]);
            }
        }

        $this->reset();
        $this->emit('Red editada');
        $this->mount();
    }

    public function save()
    {
        $reg = re::create(['nombre' => $this->nombre, 'descripcion'=> $this->descripcion,
        'aniocreacion'=> $this->aniocreacion, 'tipovinculo'=> $this->tipovinculo,
        'paisesprticipantes'=> $this->paisesprticipantes, 'url'=> $this->url, 'logo'=> $this->logo]);

        foreach ($this->objetivoRed as $obj) {
            $reg->objetivoRed()->create([
                'objetivo' => $obj['objetivo'],
            ]);
        }
        foreach ($this->actividades as $act) {
            $reg->actividades()->create([
                'actividad' => $act['actividad'],
            ]);
        }

        $this->emit('Red registrada');
        $this->reset();
        $this->mount();
    }

    public function removeEditObjetivo($index)
    {
        if (array_key_exists('id', $this->objetivoRed[$index])) {
            $this->deletedObjetivos[] = ['id' => $this->objetivoRed[$index]['id']];
        }

        unset($this->objetivoRed[$index]);
        $this->objetivoRed = array_values($this->objetivoRed);
    }

    public function render()
    {   
        $this->red = re::all();
        return view('livewire.red');
    }
}
