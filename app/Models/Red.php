<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'aniocreacion',
        'tipovinculo',
        'paisesprticipantes',
        'url',
        'logo'
    ];

    public function objetivoRed()
    {
        return $this->hasMany(ObjetivoRed::class);
    }

    public function actividades()
    {
        return $this->hasMany(ActividadRed::class);
    }
}
