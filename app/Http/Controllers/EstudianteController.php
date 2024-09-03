<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;


class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index');
    }

    public function show(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));

    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index');
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'El proveedor fue eliminado correctamente');
    }
}
