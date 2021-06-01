<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    use HasFactory;

    protected $fillable = [
        'servicio_id',
        'componente',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}
