<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }
    public function create(){
        return view('eventos.create');
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:191',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'ubicacion' => 'required|string|max:191',
            'asistentes_esperados' => 'required|integer',
            'nombre_organizador' => 'required|string|max:191',
            'contacto_organizador' => 'required|string|max:191',
            'presupuesto' => 'required|numeric|between:0,99999999.99',
            'agenda' => 'required|string',
            'notas_adicionales' => 'required|string',
        ]);
        
        
        Evento::create($request->all());
        return redirect()->route('eventos.index')->with('success', 'El Evento fue creado correctamente');
    }
    public function edit(Evento $evento){
        return view('eventos.edit', compact('evento'));
    }
    public function update(Request $request, Evento $evento){
        //dd($request->all());

        $request->validate([
            'nombre' => 'required|string|max:191',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i:s',
            'ubicacion' => 'required|string|max:191',
            'asistentes_esperados' => 'required|integer',
            'nombre_organizador' => 'required|string|max:191',
            'contacto_organizador' => 'required|string|max:191',
            'presupuesto' => 'required|numeric|between:0,99999999.99',
            'agenda' => 'required|string',
            'notas_adicionales' => 'required|string',
        ]);
        $evento->update($request->all());
        return redirect()->route('eventos.index')->with('success', 'El Evento fue modificado correctamete');
    }
    public function destroy(Evento $evento){
        $evento->delete();
        return redirect()->route('eventos.index')->with('success', 'El Evento fue eliminado correctamente');
    }
    public function  show(Evento $evento){
        return view('eventos.show', compact('evento'));
    }

}
