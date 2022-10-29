<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
use App\Models\Publicacion as pub;
class Publicacion extends Component
{
    use WithFileUploads;
    public $publicacion;
    public $tipologia;
    public $titulo;
    public $fecha;
    public $referencia;
    public $link;    
    public $editPublicacion;
    //public $message;
    public $deleteUpdatedpdf;

    public function destroy($id)
    {
        $deletePublicacion = pub::find($id);
        if (Storage::exists($deletePublicacion->link)) {
            Storage::delete($deletePublicacion->link);
        }
        pub::destroy($id);       
        $this->emit('publicacion borrada');
    }

    public function edit($id)
    {
        $this->reset('link');
        $this->editPublicacion = pub::find($id);
        $this->tipologia = $this->editPublicacion->tipologia;
        $this->titulo = $this->editPublicacion->titulo;
        $this->fecha = $this->editPublicacion->fecha;
        $this->referencia = $this->editPublicacion->referencia;        
        //$this->link = $this->editPublicacion->link;
        //$this->editPublicacion = $this->editPublicacion->link;
        $this->deleteUpdatedpdf = $this->editPublicacion->link;
        //$this->message = $this->editPublicacion->link;
    }

    public function update()
    {
        $path = $this->link->store('pdfs');
        if (Storage::exists($this->deleteUpdatedpdf)) {
            Storage::delete($this->deleteUpdatedpdf);
        }
        pub::where('id', $this->editPublicacion->id)->update([
            'tipologia'=>$this->tipologia,
            'titulo'=>$this->titulo,
            'fecha'=>$this->fecha,
            'referencia'=>$this->referencia,
            'link'=>$path,

        ]);
        $this->reset();
        $this->emit('publicacion editada');
    }

    public function save()
    {
        $path = $this->link->store('pdfs');
        pub::create(['tipologia' => $this->tipologia, 'titulo'=> $this->titulo, 'fecha'=> $this->fecha, 
        'referencia'=> $this->referencia, 'link'=> $path]);
        $this->emit('publicacion registrada');
        $this->reset();
    }

    public function render()
    {
        $this->publicacion = pub::all();
        return view('livewire.publicacion');
    }

    public function resetValues(){
        $this->reset(['tipologia', 'titulo', 'fecha', 'referencia', 'link']);
    }
}
