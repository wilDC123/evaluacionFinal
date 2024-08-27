<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Client;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('client')->get();
        //$inventories = Inventory::all();
        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Define la variable si es necesaria
        $clients = Client::all(); // Si necesitas pasar clientes a la vista, por ejemplo

        // Si $appointments no es necesario, simplemente elimina 'appointments' de compact
        return view('appointments.create', compact('clients')); // Asegúrate de que solo pasas las variables necesarias
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
        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'La cita fue creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {

        $clients = Client::all();  
        return view('appointments.edit', compact('appointment', 'clients'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //dd($request->all());

        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'appointment_date' => 'required|date',
            'address' => 'required|string|max:191',
            'description' => 'required|string|max:191',
        ]);
        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'El producto fue modificado correctamete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'El producto fue eliminado correctamente');
    }
}
