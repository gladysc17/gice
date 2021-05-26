<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Presentacion extends Component
{
    public $presentacion;
    public $mision;
    public $vision;

    public function destroy()
    {
        DB::delete('delete from presentacion');
        $this->emit('presentacion borrada');
    }

    public function edit()
    {
        $xd = DB::select('select * from presentacion');
        $this->mision = $xd[0]->mision;
        $this->vision = $xd[0]->vision;
    }

    public function update()
    {
        DB::delete('delete from presentacion');
        DB::insert('insert into presentacion (mision, vision) values (?, ?)', [$this->mision, $this->vision]);
        $this->emit('presentacion editada');
        $this->reset();
    }

    public function save()
    {
        DB::insert('insert into presentacion (mision, vision) values (?, ?)', [$this->mision, $this->vision]);
        $this->emit('presentacion creada');
        $this->reset();
    }

    public function render()
    {
        $this->presentacion = DB::select('select * from presentacion');
        return view('livewire.presentacion');
    }
}
