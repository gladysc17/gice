<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'logo',
        'descripcion',
    ];

    public function ejeProyecto()
    {
        return $this->hasMany(EjeProyecto::class);
    }

    public function objetivoProyecto()
    {
        return $this->hasMany(ObjetivoProyecto::class);
    }

    public function responsables()
    {
        return $this->hasMany(Responsable::class);
    }

    public function resultados()
    {
        return $this->hasMany(Resultado::class);
    }
}
