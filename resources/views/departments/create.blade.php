@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nuevo Departamento</h1>
@stop

@section('content')
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="location">Ubicacion</label>
                    <input type="text" id="location" name="location" class="form-control" required>
                </div>
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
