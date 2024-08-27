@extends('adminlte::page')

@section('title', 'Modificar Cliente')
@section('content_header')
@section('content')
<h1>Detalles del Cliente</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$client->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>C.I: </strong>{{$client->ci}}</p>
            <p><strong>Correo: </strong>{{$client->email}}</p>
            <p><strong>Telefono: </strong>{{$client->phone}}</p>
            <p><strong>Direccion: </strong>{{$client->address}}</p>
            <p><strong>Ciudad: </strong>{{$client->city}}</p>
            <p><strong>Pais: </strong>{{$client->country}}</p>
            <p><strong>Fecha Nacimiento: </strong>{{$client->birth_date}}</p>
            <p><strong>Genero: </strong>{{$client->gender}}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('clients.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>

    </div>
@stop