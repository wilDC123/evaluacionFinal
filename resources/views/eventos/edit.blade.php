@extends('adminlte::page')
@section('title', 'Editar Evento')
@section('content_header')
    <h1>Editar Evento</h1>
@stop
@section('content')
<form action="{{route('eventos.update', $evento)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre">Nombre del Evento</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="{{$evento->nombre}}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha" class="form-control" value="{{$evento->fecha}}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="hora">Hora</label>
                <input type="time" id="hora" name="hora" class="form-control" value="{{$evento->hora}}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" id="ubicacion" name="ubicacion" class="form-control" value="{{$evento->ubicacion}}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="asistentes_esperados">Asistentes Esperados</label>
                <input type="number" id="asistentes_esperados" name="asistentes_esperados" class="form-control" value="{{$evento->asistentes_esperados}}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre_organizador">Nombre del Organizador</label>
                <input type="text" id="nombre_organizador" name="nombre_organizador" class="form-control" value="{{$evento->nombre_organizador}}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="contacto_organizador">Contacto del Organizador</label>
                <input type="text" id="contacto_organizador" name="contacto_organizador" class="form-control" value="{{$evento->contacto_organizador}}" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="presupuesto">Presupuesto</label>
                <input type="number" id="presupuesto" name="presupuesto" class="form-control" step="0.01" value="{{$evento->presupuesto}}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="agenda">Agenda</label>
                <textarea id="agenda" name="agenda" class="form-control" required>{{$evento->agenda}}</textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="notas_adicionales">Notas Adicionales</label>
                <textarea id="notas_adicionales" name="notas_adicionales" class="form-control" required>{{$evento->notas_adicionales}}</textarea>
            </div>
        </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
