<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'linea',
        'departamento',
        'cvlac',
        'orcid',
    ];
}
