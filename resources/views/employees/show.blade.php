@extends('adminlte::page')

@section('title', 'Modificar Cita')
@section('content_header')
@section('content')
<h1>Detalles de la cita</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$appointment->client->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Fecha: </strong>{{$appointment->appointment_date}}</p>
            <p><strong>Direccion: </strong>{{$appointment->address}}</p>
            <p><strong>Descripcion: </strong>{{$appointment->description}}</p>
        </div>
        
        <div class="card-footer">
            <a href="{{ route('appointments.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>


    </div>
@stop