@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo Producto</a>
    <table class="table table-bordered mt-12">
        <thead>
            <tr>
                <td width="30px">Nº</td>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->descripion }}</td>
                    <td>${{ $product->precio }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@stop