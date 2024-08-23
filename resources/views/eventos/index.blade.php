@extends('adminlte::page')

@section('title', 'Eventos')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')
    <a href="{{ route('eventos.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo Evento</a>
    <table id="eventos" class="table table-bordered mt-12">
        <thead class="tabla-eventos">
            <tr>
                <td width="15px">Nº</td>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Ubicación</th>
                <th>Asistentes esperados</th>
                <th>Nombre del organizador</th>
                <th>Contacto del organizador</th>
                <th>Presupuesto</th>
                <th>Agenda</th>
                <th>Notas Adicionales</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
                <tr>
                    <td>{{ $evento->id }}</td>
                    <td>{{ $evento->nombre }}</td>
                    <td width="99px">{{ $evento->fecha }}</td>
                    <td>{{ $evento->hora }}</td>
                    <td>{{ $evento->ubicacion }}</td>
                    <td width="50px" style="text-align: right">{{ $evento->asistentes_esperados }}</td>
                    <td style="text-align: center">{{ $evento->nombre_organizador }}</td>
                    <td width="100px">{{ $evento->contacto_organizador }}</td>
                    <td width="50px" style="text-align: right">${{ $evento->presupuesto }}</td>
                    <td>{{ $evento->agenda }}</td>
                    <td>{{ $evento->notas_adicionales }}</td>
                    <td>
                    <a href="{{ route('eventos.edit', $evento) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('eventos.show', $evento) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('eventos.destroy', $evento) }}" method="POST" style="display:inline;">
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
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css">
    <style>
        .tabla-eventos th, .tabla-eventos td {
            text-align: center;
            vertical-align: middle;
        }
    </style>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function(){
                    $('#eventos').DataTable({
                        "ordering":false,
                        "language":{
                            "search":       "Buscar",
                            "lengthMenu":   "Mostrar _MENU_ registros por pagina",
                            "info":         "Mostrando pagina _PAGE_de_PAGES_",
                            "paginate":     {
                                                "previus": "Anterior",
                                                "next": "Siguiente",
                                                "first": "Primero",
                                                "last": "Ultimo"
                            }
                        }
                    });
                }); 
    </script>
@endsection