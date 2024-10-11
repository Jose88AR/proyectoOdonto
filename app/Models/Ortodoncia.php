<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortodoncia extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_inicio',
        'duracion',
        'fecha_proximo_mantenimiento',
        'paciente_id',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}