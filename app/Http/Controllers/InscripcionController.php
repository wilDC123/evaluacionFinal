<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Estudiante;
use App\Models\Curso;

class InscripcionController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::with('estudiante', 'curso')->get();
        return view('inscripciones.index', compact('inscripciones'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all(); 
        $cursos = Curso::all();
        return view('inscripciones.create', compact('estudiantes', 'cursos')); 
        
    }

    public function store(Request $request)
    {

        Inscripcion::create($request->all());
        return redirect()->route('inscripciones.index')->with('success', 'La inscripcion fue creado correctamente');
    }

    public function show(Inscripcion $inscripcion)
    {
        return view('inscripciones.show', compact('inscripcion'));

    }

    public function edit(Inscripcion $inscripcion)
    {
        $estudiantes = Estudiante::all();  
        $cursos = Curso::all();  
        return view('inscripciones.edit', compact('inscripcion', 'estudiantes', 'cursos'));
    }

    public function update(Request $request, Inscripcion $inscripcion)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'curso' => 'required|exists:cursos,id',
            'f_inscripcion' => 'required|date',
        ]);
        $inscripcion->update($request->all());
        return redirect()->route('inscripciones.index')->with('success', 'La inscripcion  fue modificado correctamete');
    }

    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
        return redirect()->route('inscripciones.index')->with('success', 'La inscripcion fue eliminado correctamente');
    }
}
