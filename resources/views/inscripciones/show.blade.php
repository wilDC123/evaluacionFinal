@extends('adminlte::page')

@section('title', 'Mostrar Inscripciones')

@section('content_header')
    <h1>Detalles de la Inscripcion</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>ID de Inscripcion</th>
                        <td>{{ $inscripcion->id }}</td>
                    </tr>
                    <tr>
                        <th>Estudiante Inscrito</th>
                        <td>{{ $inscripcion->estudiante_id }}</td>
                    </tr>
                    <tr>
                        <th>Curso</th>
                        <td>{{ $inscripcion->curso_id }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de Inscripcion</th>
                        <td>{{ $inscripcion->f_inscripcion }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('inscripciones.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('inscripciones.edit', $inscripcion) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('inscripciones.destroy', $inscripcion) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop
