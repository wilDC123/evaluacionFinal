<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with('position', 'department')->get();
        //$inventories = Inventory::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        $positions = Position::all(); 
        $departments = Department::all();
        return view('employees.create', compact('positions', 'departments')); 
        
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
        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'La cita fue creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {

        $positions = Position::all();  
        $departments = Department::all();  
        return view('employees.edit', compact('employee', 'positions', 'departments'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //dd($request->all());

        $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'ci' => 'required|string|max:191|unique:employees,ci,' . $employee->id,
            'email' => 'required|email|max:191|unique:employees,email,' . $employee->id,
            'phone' => 'required|string|max:191|unique:employees,phone,' . $employee->id,
            'birth_date' => 'required|date',
            'address' => 'required|string|max:191',
            'city' => 'required|string|max:191',
            'country' => 'required|string|max:191',
            'position_id' => 'required|exists:positions,id',
            'department_id' => 'required|exists:departments,id',
            'hire_date' => 'required|date',
            'salary' => 'required|numeric',
            'gender' => 'required|string|max:191',
        ]);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'El producto fue modificado correctamete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'El producto fue eliminado correctamente');
    }
}
