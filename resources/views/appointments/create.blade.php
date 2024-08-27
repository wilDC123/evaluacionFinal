@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nueva Cita</h1>
@stop

@section('content')
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        
            <div class="form-group col-md-5">
                <label for="client_id">Cliente</label>
                <select id="client_id" name="client_id" class="form-control" required>
                    <option value="">Seleccione un cliente</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>
        
            <div class="form-group col-md-5">
                <label for="appointment_date">Fecha</label>
                <input type="date" id="appointment_date" name="appointment_date" class="form-control" required>
            </div>
        
            <div class="form-group col-md-5">
                <label for="address">Direccion</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>
    
            <div class="form-group col-md-5">
                <label for="description">Descripcion</label>
                <input type="text" id="description" name="description" class="form-control" required>
            </div> 

             
       
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
