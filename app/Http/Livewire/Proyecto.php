<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Proyecto as pro;
use App\Models\EjeProyecto as ejesito;
use App\Models\Responsable as respons;
use App\Models\ObjetivoProyecto as objetives;
use App\Models\Resultado as results;

class Proyecto extends Component
{
    public $proyecto;
    public $nombre;
    public $logo;
    public $descripcion;
    public $editProyecto;

    public $ejeProyecto = [];
    public $deletedEjes = [];

    public $objetivoProyecto = [];
    public $deletedObjetivos = [];

    public $resultados = [];
    public $deletedResultados = [];

    public $responsables = [];
    public $deletedResponsables = [];
    

    public function mount()
    {
        $this->ejeProyecto = [
            ['eje' => '']
        ];

        $this->objetivoProyecto = [
            ['objetivo' => '']
        ];

        $this->responsables = [
            ['responsable' => '']
        ];

        $this->resultados = [
            ['resultado' => '']
        ];
    }

    public function addEje()
    {
        $this->ejeProyecto[] = ['eje' => ''];
    }

    public function removeEje($index)
    {
        unset($this->ejeProyecto[$index]);
        $this->ejeProyecto = array_values($this->ejeProyecto);
    }

    public function addObjetivo()
    {
        $this->objetivoProyecto[] = ['objetivo' => ''];
    }

    public function removeObjetivo($index)
    {
        unset($this->objetivoProyecto[$index]);
        $this->objetivoProyecto = array_values($this->objetivoProyecto);
    }

    public function addResponsable()
    {
        $this->responsables[] = ['responsable' => ''];
    }

    public function removeResponsable($index)
    {
        unset($this->responsables[$index]);
        $this->responsables = array_values($this->responsables);
    }

    public function addResultado()
    {
        $this->resultados[] = ['resultado' => ''];
    }

    public function removeResultado($index)
    {
        unset($this->resultados[$index]);
        $this->resultados = array_values($this->resultados);
    }

    public function destroy($id)
    {
        pro::destroy($id);       
        $this->emit('Proyecto borrado');
    }

    public function edit($id)
    {
        unset($this->ejeProyecto);
        $this->ejeProyecto = [];

        unset($this->objetivoProyecto);
        $this->objetivoProyecto = [];

        unset($this->responsables);
        $this->responsables = [];

        unset($this->resultados);
        $this->resultados = [];

        $this->editProyecto = pro::find($id);
        $this->nombre = $this->editProyecto->nombre;
        $this->logo = $this->editProyecto->logo;
        $this->descripcion = $this->editProyecto->descripcion;

        foreach ($this->editProyecto->ejeProyecto as $ejep) {
            $this->ejeProyecto[] = ['id' => $ejep->id, 'eje' => $ejep->eje];
        }

        foreach ($this->editProyecto->objetivoProyecto as $obj) {
            $this->objetivoProyecto[] = ['id' => $obj->id, 'objetivo' => $obj->objetivo];
        }

        foreach ($this->editProyecto->responsables as $resp) {
            $this->responsables[] = ['id' => $resp->id, 'responsable' => $resp->responsable];
        }

        foreach ($this->editProyecto->resultados as $resu) {
            $this->resultados[] = ['id' => $resu->id, 'resultado' => $resu->resultado];
        }

    }

    public function update()
    {
        $this->editProyecto->update(['nombre' => $this->nombre,  'logo' => $this->logo,'descripcion' => $this->descripcion]);
        
        foreach ($this->deletedEjes as $eje) {
            ejesito::destroy($eje['id']);
        }
        foreach ($this->ejeProyecto as $eje) {
            if (array_key_exists('id', $eje)) {
                ejesito::find($eje['id'])->update(['eje' => $eje['eje']]);
            } else {
                $this->editProyecto->ejeProyecto()->create([
                    'eje' => $eje['eje'],
                ]);
            }
        }

        foreach ($this->deletedObjetivos as $obj) {
            objetives::destroy($obj['id']);
        }
        foreach ($this->objetivoProyecto as $obj) {
            if (array_key_exists('id', $obj)) {
                objetives::find($obj['id'])->update(['objetivo' => $obj['objetivo']]);
            } else {
                $this->editObjetivo->objetivoProyecto()->create([
                    'objetivo' => $obj['objetivo'],
                ]);
            }
        }

        foreach ($this->deletedResponsables as $resp) {
            respons::destroy($resp['id']);
        }
        foreach ($this->responsables as $resp) {
            if (array_key_exists('id', $resp)) {
                respons::find($resp['id'])->update(['responsable' => $resp['responsable']]);
            } else {
                $this->editProyecto->responsables()->create([
                    'responsable' => $resp['responsable'],
                ]);
            }
        }

        foreach ($this->deletedResultados as $resu) {
            results::destroy($resu['id']);
        }
        foreach ($this->resultados as $resu) {
            if (array_key_exists('id', $resu)) {
                results::find($resu['id'])->update(['resultado' => $resu['resultado']]);
            } else {
                $this->editProyecto->resultados()->create([
                    'resultado' => $resu['resultado'],
                ]);
            }
        }

        $this->reset();
        $this->emit('Proyecto editado');
        $this->mount();
    }

    public function save()
    {
        $proy = pro::create(['nombre' => $this->nombre, 'logo' => $this->logo, 'descripcion'=> $this->descripcion]);
        foreach ($this->ejeProyecto as $ejep) {
            $proy->ejeProyecto()->create([
                'eje' => $ejep['eje'],
            ]);
        }
        foreach ($this->objetivoProyecto as $obj) {
            $proy->objetivoProyecto()->create([
                'objetivo' => $obj['objetivo'],
            ]);
        }
        foreach ($this->responsables as $resp) {
            $proy->responsables()->create([
                'responsable' => $resp['responsable'],
            ]);
        }
        foreach ($this->resultados as $resu) {
            $proy->resultados()->create([
                'resultado' => $resu['resultado'],
            ]);
        }
        
        $this->emit('Proyecto registrado');
        $this->reset();
        $this->mount();
    }

    public function removeEditEje($index)
    {
        if (array_key_exists('id', $this->ejeProyecto[$index])) {
            $this->deletedEjes[] = ['id' => $this->ejeProyecto[$index]['id']];
        }

        unset($this->ejeProyecto[$index]);
        $this->ejeProyecto = array_values($this->ejeProyecto);
    }

    public function removeEditObjetivo($index)
    {
        if (array_key_exists('id', $this->objetivoProyecto[$index])) {
            $this->deletedObjetivos[] = ['id' => $this->objetivoProyecto[$index]['id']];
        }

        unset($this->objetivoProyecto[$index]);
        $this->objetivoProyecto = array_values($this->objetivoProyecto);
    }

    public function removeEditResponsable($index)
    {
        if (array_key_exists('id', $this->responsables[$index])) {
            $this->deletedResponsables[] = ['id' => $this->responsables[$index]['id']];
        }

        unset($this->responsables[$index]);
        $this->responsables = array_values($this->responsables);
    }

    public function removeEditResultado($index)
    {
        if (array_key_exists('id', $this->resultados[$index])) {
            $this->deletedResultados[] = ['id' => $this->resultados[$index]['id']];
        }

        unset($this->resultados[$index]);
        $this->resultados = array_values($this->resultados);
    }


    public function render()
    {
        $this->proyecto = pro::all();
        return view('livewire.proyecto');
    }
}
