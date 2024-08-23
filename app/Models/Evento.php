<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nombre', 
        'fecha', 
        'hora', 
        'ubicacion', 
        'asistentes_esperados', 
        'nombre_organizador', 
        'contacto_organizador', 
        'presupuesto', 
        'agenda', 
        'notas_adicionales'
    ];

}
