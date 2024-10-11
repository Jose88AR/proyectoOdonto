<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'precio',
        'fecha_tratamiento',
        'estado_de_tratamiento',
        'visita_id',
    ];

    public function visita()
    {
        return $this->belongsTo(Visita::class);
    }
}