<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semillero extends Model
{
    use HasFactory;

    protected $fillable = [
        'sigla',
        'nombre',
        'fechacreacion',
        'objeto',
        'logo',
        'director',
        'correo',
        'caracteristicas',
    ];
}
