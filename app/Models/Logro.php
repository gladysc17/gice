<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logro extends Model
{
    use HasFactory;

    protected $fillable = [
        'lineaInvestigacion_id',
        'logro',
    ];

    public function lineaInvestigacion()
    {
        return $this->belongsTo(LineaInvestigacion::class);
    }

}
