<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Efecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'lineaInvestigacion_id',
        'efecto',
    ];

    public function lineaInvestigacion()
    {
        return $this->belongsTo(LineaInvestigacion::class);
    }
}
