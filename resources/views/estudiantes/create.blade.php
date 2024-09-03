@extends('adminlte::page')

@section('title', 'Crear estudiante')

@section('content_header')
    <h1>Nuevo Estudiante</h1>
@stop

@section('content')
    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="ci">Cedula de Identidad</label>
                    <input type="text" id="ci" name="ci" class="form-control" required>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" id="correo" name="correo" class="form-control" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" required>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="f_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" id="f_nacimiento" name="f_nacimiento" class="form-control" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="genero">Género</label>
                    <select id="genero" name="genero" class="form-control" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre_padre_madre">Nombre del Padre o Madre</label>
                    <input type="text" id="nombre_padre_madre" name="nombre_padre_madre" class="form-control" required>
                </div>
            </div>      
        </div> 
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
