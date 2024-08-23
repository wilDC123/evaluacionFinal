@extends('adminlte::page')

@section('title', 'Modificar Producto')
@section('content_header')
@section('content')
<h1>Detalles del Producto</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$product->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>precio</strong>{{$product->descripion}}</p>
            <p><strong>precio</strong>{{$product->precio}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('products.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{route('products.edit', $product)}}" class="btn btn-warning">Editar</a>
            <form action="{{route('products.destroy', $product)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Eliminar</button>
            </form>

        </div>

    </div>
@stop