@extends('adminlte::page')

@section('title', 'Modificar Departamento')
@section('content_header')
@section('content')
<h1>Detalles del Departamento</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$department->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Ubicacion: </strong>{{$department->location}}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('departments.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('departments.edit', $department) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('departments.destroy', $department) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>

    </div>
@stop