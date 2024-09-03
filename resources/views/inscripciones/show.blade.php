@extends('adminlte::page')

@section('title', 'Modificar Empleado')

@section('content_header')
    <h1>Detalles del Empleado: {{$employee->first_name . ' ' . $employee->last_name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>ID de Empleado</th>
                        <td>{{ $employee->id }}</td>
                    </tr>
                    <tr>
                        <th>Cédula de Identidad</th>
                        <td>{{ $employee->ci }}</td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>{{ $employee->email }}</td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td>{{ $employee->phone }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de Nacimiento</th>
                        <td>{{ $employee->birth_date }}</td>
                    </tr>
                    <tr>
                        <th>Dirección</th>
                        <td>{{ $employee->address }}</td>
                    </tr>
                    <tr>
                        <th>Ciudad</th>
                        <td>{{ $employee->city }}</td>
                    </tr>
                    <tr>
                        <th>País</th>
                        <td>{{ $employee->country }}</td>
                    </tr>
                    <tr>
                        <th>Departamento</th>
                        <td>{{ $employee->department->name }}</td>
                    </tr>
                    <tr>
                        <th>Cargo</th>
                        <td>{{ $employee->position->job }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de Contrato</th>
                        <td>{{ $employee->hire_date }}</td>
                    </tr>
                    <tr>
                        <th>Salario</th>
                        <td>{{ $employee->salary }}</td>
                    </tr>
                    <tr>
                        <th>Género</th>
                        <td>{{ $employee->gender }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('employees.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop
