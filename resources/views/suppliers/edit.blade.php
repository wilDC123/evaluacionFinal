@extends('adminlte::page')
@section('title', 'Editar Proveedor')
@section('content_header')
    <h1>Editar Proveedor</h1>
@stop
@section('content')
<form action="{{route('suppliers.update', $supplier)}}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$supplier->name}}" required>
        </div>
    
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="text" id="email" name="email" class="form-control" value="{{$supplier->email}}" required>
        </div>
    
        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{$supplier->phone}}" required>
        </div>

        <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" id="address" name="address" class="form-control" value="{{$supplier->address}}" required>
        </div> 
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
