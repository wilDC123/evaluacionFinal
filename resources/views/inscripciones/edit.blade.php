@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
    <form action="{{ route('inscripciones.update', $inscripcion->id) }}" method="POST">        
        @csrf
        @method('PUT')
    
        <div class="row">
            <div class="col-md-6">
                <label for="estudiante_id">Estudiante</label>
                <select id="estudiante_id" name="estudiante_id" class="form-control" required>
                    <option value="">Seleccione un Estudiante</option>
                    @foreach($estudiantes as $estudiante)
                        <option value="{{ $estudiante->id }}" {{ $inscripcion->estudiante_id == $estudiante->id ? 'selected' : '' }}>
                            {{ $estudiante->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="curso_id">Curso</label>
                <select id="curso_id" name="curso_id" class="form-control" required>
                    <option value="">Seleccione un Curso</option>
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->id }}" {{ $inscripcion->curso_id == $curso->id ? 'selected' : '' }}>
                            {{ $curso->titulo }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="f_inscripcion">Fecha de Inscripcion</label>
                    <input type="date" id="f_inscripcion" name="f_inscripcion" class="form-control" value="{{ $inscripcion->f_inscripcion }}" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
