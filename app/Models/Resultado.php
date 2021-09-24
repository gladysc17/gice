<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    protected $fillable = [
        'proyecto_id',
        'resultado',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
