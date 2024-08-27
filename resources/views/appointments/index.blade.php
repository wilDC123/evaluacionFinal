@extends('adminlte::page')

@section('title', 'Cita')

@section('content_header')
    <h1>Detalles de cita</h1>
@stop

@section('content')
    <a href="{{ route('appointments.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="appointments" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-appointments  text-white" style="background-color: #515E78;">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Cliente</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Direccion</th>
                <th class="text-center">Descripcion</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td class="text-center">{{ $appointment->id }}</td>
                    <td class="text-center">{{ $appointment->client->name }}</td>
                    <td class="text-center">{{ $appointment->appointment_date }}</td>
                    <td class="text-center">{{ $appointment->address }}</td>
                    <td class="text-center">{{ $appointment->description }}</td>
                    <td>
                    <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('appointments.show', $appointment) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display:inline;">
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


@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function(){
                    $('#appointments').DataTable({
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