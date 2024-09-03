@extends('adminlte::page')
@section('title', 'Editar Estudiante')
@section('content_header')
    <h1>Editar Estudiante</h1>
@stop
@section('content')
<form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf
    @method('PUT')

        <div class="col-md-6">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{$curso->titulo}}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="descripcion">Descripdescripcionon</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$curso->descripcion}}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="ubicacion">Ubicacion</label>
                <input type="text" id="ubicacion" name="ubicacion" class="form-control" value="{{$curso->ubicacion}}" required>
            </div>
        </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
