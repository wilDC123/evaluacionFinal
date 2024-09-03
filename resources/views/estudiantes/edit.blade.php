@extends('adminlte::page')
@section('title', 'Editar Estudiante')
@section('content_header')
    <h1>Editar Estudiante</h1>
@stop
@section('content')
<form action="{{route('estudiantes.update', $estudiante)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{$estudiante->nombre}}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="ci">Cedula de Identidad</label>
                <input type="text" id="ci" name="ci" class="form-control" value="{{$estudiante->ci}}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" class="form-control" value="{{$estudiante->correo}}" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Telefono</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{$estudiante->telefono}}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="f_nacimiento">Fecha de Nacimiento</label>
                <input type="date" id="f_nacimiento" name="f_nacimiento" class="form-control" value="{{$estudiante->f_nacimiento}}" required>
            </div>
        </div>
        <div class="col-md-6">
                <div class="form-group">
                    <label for="genero">Género</label>
                    <select id="genero" name="genero" class="form-control" required>
                        <option value="masculino" {{ $estudiante->genero == 'masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="femenino" {{ $estudiante->genero == 'femenino' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre_padre_madre">Nombre del padre o madre</label>
                <input type="text" id="nombre_padre_madre" name="nombre_padre_madre" class="form-control" value="{{$estudiante->nombre_padre_madre}}" required>
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
