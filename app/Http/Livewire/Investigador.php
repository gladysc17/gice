<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Investigador as inv;
class Investigador extends Component
{
    public $investigador;
    public $nombre;
    public $correo;
    public $linea;
    public $departamento;
    public $cvlac;
    public $orcid;
    public $editInvestigador;
    

    public function destroy($id)
    {
        inv::destroy($id);       
        $this->emit('Investigador(a) borrado(a)');
    }

    public function edit($id)
    {
        $this->editInvestigador = inv::find($id);
        $this->nombre = $this->editInvestigador->nombre;
        $this->correo = $this->editInvestigador->correo;
        $this->linea = $this->editInvestigador->linea;
        $this->departamento = $this->editInvestigador->departamento;
        $this->cvlac = $this->editInvestigador->cvlac;
        $this->orcid = $this->editInvestigador->orcid;

    }

    public function update()
    {
        inv::where('id', $this->editInvestigador->id)->update([
            'nombre'=>$this->nombre,
            'correo'=>$this->correo,
            'linea'=>$this->linea,
            'departamento'=>$this->departamento,
            'cvlac'=>$this->cvlac,
            'orcid'=>$this->orcid,

        ]);
        $this->reset();
        $this->emit('Investigador(a) editado(a)');
    }

    public function save()
    {
        inv::create(['nombre' => $this->nombre, 'correo'=> $this->correo, 'linea'=> $this->linea, 
        'departamento'=> $this->departamento, 'cvlac'=> $this->cvlac, 'orcid'=> $this->orcid]);
        $this->emit('Investigador(a) registrado (a)');
        $this->reset();
    }

    
    public function render()
    {
        $this->investigador = inv::all();
        return view('livewire.investigador');
    }
}
