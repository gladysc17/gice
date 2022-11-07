<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use App\Models\Semillero as semi;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Semillero extends Component
{
    use WithFileUploads;
    public $semillero;
    public $sigla;
    public $nombre;
    public $fechacreacion;
    public $objeto;
    public $logo;
    public $director;
    public $correo;
    public $caracteristicas;
    public $editSemillero;
    public $deleteUpdatedLogo;
    public $editLogo;
    

    public function destroy($id)
    {
        $deleteRed = semi::find($id);
        if (Storage::exists($deleteRed->logo)) {
            Storage::delete($deleteRed->logo);
        }
        semi::destroy($id);       
        $this->emit('Semillero borrado');
    }

    public function edit($id)
    {
        $this->editSemillero = semi::find($id);
        $this->sigla = $this->editSemillero->sigla;
        $this->nombre = $this->editSemillero->nombre;
        $this->fechacreacion = $this->editSemillero->fechacreacion;
        $this->objeto = $this->editSemillero->objeto;
        //$this->logo = $this->editSemillero->logo;
        $this->director = $this->editSemillero->director;
        $this->correo = $this->editSemillero->correo;
        $this->caracteristicas = $this->editSemillero->caracteristicas;
        $this->deleteUpdatedLogo = $this->editSemillero->logo;
        $this->editLogo = $this->editSemillero->logo;

    }

    public function update()
    {
        $path = $this->logo->store('imgs');

        if (Storage::exists($this->deleteUpdatedLogo)) {
            Storage::delete($this->deleteUpdatedLogo);
        }
        semi::where('id', $this->editSemillero->id)->update([
            'sigla'=>$this->sigla,
            'nombre'=>$this->nombre,
            'fechacreacion'=>$this->fechacreacion,
            'objeto'=>$this->objeto,
            'logo'=>$path,
            'director'=>$this->director,
            'correo'=>$this->correo,
            'caracteristicas'=>$this->caracteristicas,
        ]);
        $this->reset();
        $this->emit('Semillero editado');
    }

    public function save()
    {
        $path = $this->logo->store('imgs');
        semi::create(['sigla' => $this->sigla, 'nombre' => $this->nombre, 
        'fechacreacion' => $this->fechacreacion, 'objeto' => $this->objeto, 'logo' => $path,
        'director'=> $this->director, 'correo'=> $this->correo, 'caracteristicas'=> $this->caracteristicas]);
        $this->emit('Semillero registrado');
        $this->reset();
    }

    public function resetValues(){
        $this->reset(['semillero', 'sigla', 'nombre', 'fechacreacion', 'objeto', 'logo', 'director', 'correo', 'caracteristicas']);
    }


    public function render()
    {
        $this->semillero = semi::all();
        return view('livewire.semillero');
    }
}
