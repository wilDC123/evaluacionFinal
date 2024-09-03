@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nueva Inscripcion</h1>
@stop

@section('content')
    <form action="{{ route('inscripciones.store') }}" method="POST">
        @csrf
        
        <div class="row">
                <div class="col-md-6">
                    <label for="estudiante_id">Estudiante Inscrito</label>
                    <select id="estudiante_id" name="estudiante_id" class="form-control" required>
                        <option value="">Seleccione un estudiante</option>
                        @foreach($estudiantes as $estudiante)
                            <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="curso_id">Curso</label>
                    <select id="curso_id" name="curso_id" class="form-control" required>
                        <option value="">Seleccione un Departamento</option>
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="f_inscripcion">Fecha de inscripcion</label>
                        <input type="date" id="f_inscripcion" name="f_inscripcion" class="form-control" required>
                    </div>
                </div>
            </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
