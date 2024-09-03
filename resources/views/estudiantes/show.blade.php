@extends('adminlte::page')

@section('title', 'Modificar Estudiante')
@section('content_header')
@section('content')
<h1>Detalles del Estudiante</h1>
<div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="col-md-5">ID de Estudiante</th>
                        <td>{{ $estudiante->id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre del Estudiante</th>
                        <td>{{ $estudiante->nombre }}</td>
                    </tr>
                    <tr>
                        <th>Cédula de Identidad</th>
                        <td>{{ $estudiante->ci }}</td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>{{ $estudiante->correo }}</td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td>{{ $estudiante->telefono }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de Nacimiento</th>
                        <td>{{ $estudiante->f_nacimiento }}</td>
                    </tr>
                    <tr>
                        <th>Genero</th>
                        <td>{{ $estudiante->genero }}</td>
                    </tr>
                    <tr>
                        <th>Nombre del padre o madre</th>
                        <td>{{ $estudiante->nombre_padre_madre }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop