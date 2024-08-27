<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Supplier;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::with('supplier')->get();
        //$inventories = Inventory::all();
        return view('inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();  
        return view('inventories.create', compact('suppliers'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'item_name' => 'required|string|max:191',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'supplier_id' => 'required|exists:suppliers,id'
        ]);*/
        Inventory::create($request->all());
        return redirect()->route('inventories.index')->with('success', 'El producto fue creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        return view('inventories.show', compact('inventory'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {

        $suppliers = Supplier::all();  
        return view('inventories.edit', compact('inventory', 'suppliers'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        


        $request->validate([
            'item_name' => 'required|string|max:191',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'supplier_id' => 'required|exists:suppliers,id'
        ]);
        $inventory->update($request->all());
        return redirect()->route('inventories.index')->with('success', 'El producto fue modificado correctamete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventories.index')->with('success', 'El producto fue eliminado correctamente');
    }
}
