@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nuevo Empleado</h1>
@stop

@section('content')
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="first_name">Nombre</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ci">C.I</label>
                        <input type="text" id="ci" name="ci" class="form-control" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="birth_date">Cumpleaños</label>
                        <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                    </div>
                </div>
            </div>
            
                
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address">Direccion</label>
                        <input type="text" id="address" name="address" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="city">Ciudad</label>
                        <input type="text" id="city" name="city" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="country">Pais</label>
                        <input type="text" id="country" name="country" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="position_id">Cargo</label>
                    <select id="position_id" name="position_id" class="form-control" required>
                        <option value="">Seleccione un cargo</option>
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->job }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="department_id">Departamento</label>
                    <select id="department_id" name="department_id" class="form-control" required>
                        <option value="">Seleccione un Departamento</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="hire_date">Fecha de contrato</label>
                        <input type="date" id="hire_date" name="hire_date" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="salary">Salario</label>
                        <input type="number" id="salary" name="salary" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="gender">Genero</label>
                        <input type="text" id="gender" name="gender" class="form-control" required>
                    </div>
                </div>
            </div>




            
            
        

             
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
