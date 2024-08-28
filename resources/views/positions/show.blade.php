@extends('adminlte::page')

@section('title', 'Modificar Departamento')
@section('content_header')
@section('content')
<h1>Detalles del Departamento</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$position->job}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descripcion: </strong>{{$position->description}}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('positions.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('positions.edit', $position) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('positions.destroy', $position) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>

    </div>
@stop