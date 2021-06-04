<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\LineaInvestigacion as lin;
use App\Models\Logro as logrito;
use App\Models\Efecto as efect;

class Linea extends Component
{
    public $lineas;
    public $linea;
    public $nombre;
    public $objetivo;
    public $logro;
    public $logros = [];
    public $deletedLogros = [];
    public $efecto;
    public $efectos = [];
    public $deletedEfectos = [];
    public $editLinea;

    public function mount()
    {
        $this->logros = [
            ['logro' => '']
        ];
        $this->efectos =[
            ['efecto' => '']
        ];
    }

    public function addLogro()
    {
        $this->logros[] = ['logro' => ''];
    }

    public function addEfecto()
    {
        $this->efectos[] = ['efecto' => ''];
    }

    public function removeLogro($index)
    {
        unset($this->logros[$index]);
        $this->logros = array_values($this->logros); //reiniciar el indice y no borrar lo que hay en el otro
    }

    public function removeEfecto($index)
    {
        unset($this->efectos[$index]);
        $this->efectos = array_values($this->efectos);
    }

    public function save()
    {
        $line = lin::create(['nombre' => $this->nombre, 'objetivo'=> $this->objetivo]);
        foreach ($this->logros as $log) { // recorre el arreglo de logros
            $line->logros()->create([
                'logro' => $log['logro'],
            ]);
        }
        foreach ($this->efectos as $efe){
            $line->efectos()->create([
                'efecto' => $efe['efecto'],
            ]);
        }
        $this->emit('linea creada');
        $this->reset();
        $this->mount();
    }

    public function destroy($id)
    {
        lin::destroy($id);
        $this->emit('linea borrada');
    }

    public function edit($id)
    {

        unset($this->logros);
        $this->logros = [];

        unset($this->efectos);
        $this->efectos = [];

        $this->editLinea = lin::find($id);
        $this->nombre = $this->editLinea->nombre;
        $this->objetivo = $this->editLinea->objetivo;

        foreach ($this->editLinea->logros as $log) {
            $this->logros[] = ['id' => $log->id, 'logro' => $log->logro];
        }
        foreach ($this->editLinea->efectos as $efe) {
            $this->efectos[] = ['id' => $efe->id, 'efecto' => $efe->efecto];
        }

    }

    public function update()
    {   
        //dd($this->objetivo);
        $this->editLinea->update(['nombre' => $this->nombre, 'objetivo' => $this->objetivo]);
        foreach ($this->deletedLogros as $dlog) {
            logrito::destroy($dlog['id']);
        }
        foreach ($this->logros as $log) {
            if (array_key_exists('id', $log)) {
                logrito::find($log['id'])->update(['logro' => $log['logro']]);
            } else {
                $this->editLinea->logros()->create([
                    'logro' => $log['logro'],
                ]);
            }
        }
        foreach ($this->deletedEfectos as $defe) {
            efect::destroy($defe['id']);
        }
        foreach ($this->efectos as $efe) {
            if (array_key_exists('id', $efe)) {
                efect::find($efe['id'])->update(['efecto' => $efe['efecto']]);
            } else {
                $this->editLinea->efectos()->create([
                    'efecto' => $efe['efecto'],
                ]);
            }
        }
        $this->emit('linea editada');
        $this->reset();
        $this->mount();
    }

    public function removeEditLogro($index)
    {        
        if (array_key_exists('id', $this->logros[$index])) {
            $this->deletedLogros[] = ['id' => $this->logros[$index]['id']];
        }
        unset($this->logros[$index]);
    } 

    public function removeEditEfecto($index)
    {        
        if (array_key_exists('id', $this->efectos[$index])) {
            $this->deletedEfectos[] = ['id' => $this->efectos[$index]['id']];
        }
        unset($this->logros[$index]);
    } 

    public function render()
    {
        $this->lineas = lin::all();
        return view('livewire.linea');
    }
}
