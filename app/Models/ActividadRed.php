<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadRed extends Model
{
    use HasFactory;

    protected $fillable = [
        'red_id',
        'actividad',
    ];

    public function red()
    {
        return $this->belongsTo(Red::class);
    }
}
