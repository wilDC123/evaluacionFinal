<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;


class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::all();
        return view('positions.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('positions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Position::create($request->all());
        return redirect()->route('positions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $position = Position::findOrFail($id);
        return view('positions.show', compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        return view('positions.edit', compact('position'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $position = Position::findOrFail($id);
        $position->update($request->all());
        return redirect()->route('positions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('positions.index')->with('success', 'El proveedor fue eliminado correctamente');
    }
}
