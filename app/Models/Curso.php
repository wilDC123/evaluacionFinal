<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = ['titulo', 'descripcion', 'ubicacion'];
    public function inscripciones(){
        return $this->hasMany(Inscripcion::class);
    }
}
