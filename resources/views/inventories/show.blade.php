@extends('adminlte::page')

@section('title', 'Modificar Proveedor')
@section('content_header')
@section('content')
<h1>Detalles del Proveedor</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$inventory->item_name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cantidad: </strong>{{$inventory->quantity}}</p>
            <p><strong>Precio: </strong>{{$inventory->price}}</p>
            <p><strong>Fecha: </strong>{{$inventory->date}}</p>
            <p><strong>Proveedor: </strong>{{$inventory->supplier->name}}</p>
        </div>
        
        <div class="card-footer">
            <a href="{{ route('inventories.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>


    </div>
@stop