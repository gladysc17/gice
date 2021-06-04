<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaInvestigacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'objetivo',
    ];

    public function logros()
    {
        return $this->hasMany(Logro::class);
    }

    public function efectos(){
        return $this->hasMany(Efecto::class);
    }

}
