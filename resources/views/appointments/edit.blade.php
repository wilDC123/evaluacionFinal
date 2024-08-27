@extends('adminlte::page')

@section('title', 'Editar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
    <form action="{{ route('appointments.update', $appointment) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="client_id">Cliente</label>
            <select id="client_id" name="client_id" class="form-control" required>
                <option value="">Seleccione un cliente</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ $client->id == $appointment->client_id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div> 
        
            <div class="form-group">
                <label for="appointment_date">Fecha</label>
                <input type="date" id="appointment_date" name="appointment_date" class="form-control" value="{{$appointment->appointment_date}}" required>
            </div>
        
            <div class="form-group">
                <label for="address">Direccion</label>
                <input type="text" id="address" name="address" class="form-control" value="{{$appointment->address}}" required>
            </div>
    
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" id="description" name="description" class="form-control" value="{{$appointment->description}}" required>
            </div> 

             
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
