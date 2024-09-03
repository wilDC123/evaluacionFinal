@extends('adminlte::page')

@section('title', 'detalles del curso')
@section('content_header')
@section('content')
<h1>Detalles del Curso</h1>
<div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="col-md-5">ID del curso</th>
                        <td>{{ $curso->id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre del curso</th>
                        <td>{{ $curso->titulo }}</td>
                    </tr>
                    <tr>
                        <th>Descripcion</th>
                        <td>{{ $curso->descripcion }}</td>
                    </tr>
                    <tr>
                        <th>Ubicacion</th>
                        <td>{{ $curso->ubicacion }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('cursos.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop