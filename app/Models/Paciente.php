<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'edad',
        'numero_contacto',
        'direccion',
        'email',
        'tipo_de_tratamiento',
    ];

    public function visitas()
    {
        return $this->hasMany(Visita::class);
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

    public function ortodoncia()
    {
        return $this->hasOne(Ortodoncia::class);
    }
}