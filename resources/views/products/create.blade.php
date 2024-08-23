@extends('adminlte::page')

@section('title', 'Create Product')

@section('content_header')
    <h1>Nuevo</h1>
@stop

@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nobre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripion">Descripcion</label>
            <textarea id="descripion" name="descripion" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop