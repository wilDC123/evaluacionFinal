@extends('adminlte::page')
@section('title', 'Editar Departamento')
@section('content_header')
    <h1>Editar Departamento</h1>
@stop
@section('content')
<form action="{{route('positions.update', $position)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="job">Nombre</label>
                    <input type="text" id="job" name="job" class="form-control" value="{{$position->job}}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" id="description" name="description" class="form-control" value="{{$position->description}}" required>
                </div>
            </div>
        </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
