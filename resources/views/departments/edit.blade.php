@extends('adminlte::page')
@section('title', 'Editar Departamento')
@section('content_header')
    <h1>Editar Departamento</h1>
@stop
@section('content')
<form action="{{route('departments.update', $department)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$department->name}}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="location">Ubicacion</label>
                    <input type="text" id="location" name="location" class="form-control" value="{{$department->location}}" required>
                </div>
            </div>
        </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
