<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $fillable = [
        'proyecto_id',
        'responsable',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
