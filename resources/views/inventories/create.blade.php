@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nuevo Producto</h1>
@stop

@section('content')
    <form action="{{ route('inventories.store') }}" method="POST">
        @csrf
        
            <div class="form-group">
                <label for="item_name">Nombre</label>
                <input type="text" id="item_name" name="item_name" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label for="quantity">Cantidad</label>
                <input type="number" id="quantity" name="quantity" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" id="price" name="price" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="date">Fecha</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div> 

            <div class="form-group">
            <label for="supplier_id">Proveedor</label>
            <select id="supplier_id" name="supplier_id" class="form-control" required>
                <option value="">Seleccione un proveedor</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div> 
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
