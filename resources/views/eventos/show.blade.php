@extends('adminlte::page')

@section('title', 'Modificar Evento')
@section('content_header')
@section('content')
<h1>Detalles del Producto</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$evento->nombre}}</h3>
        </div>
        <div class="card-body">
            <p><strong>fecha: </strong>{{$evento->fecha}}</p>
            <p><strong>hora: </strong>{{$evento->hora}}</p>
            <p><strong>ubicacion: </strong>{{$evento->ubicacion}}</p>
            <p><strong>asistentes esperados: </strong>{{$evento->asistentes_esperados}}</p>
            <p><strong>nombre organizador: </strong>{{$evento->nombre_organizador}}</p>
            <p><strong>contacto organizador: </strong>{{$evento->contacto_organizador}}</p>
            <p><strong>presupuesto: </strong>{{$evento->presupuesto}}</p>
            <p><strong>agenda: </strong>{{$evento->agenda}}</p>
            <p><strong>notas adicionales: </strong>{{$evento->notas_adicionales}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('eventos.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{route('eventos.edit', $evento)}}" class="btn btn-warning">Editar</a>
            <form action="{{route('eventos.destroy', $evento)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Eliminar</button>
            </form>


        </div>

    </div>
@stop