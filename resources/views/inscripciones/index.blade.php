@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1>Detalles de la Inscripcion</h1>
@stop

@section('content')
    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="inscripciones" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-inscripciones  text-white" style="background-color: #515E78;">
            <tr>
                <th class="text-center">Nº</th>
                <th class="text-center">Estudiante</th>
                <th class="text-center">Curso</th>
                <th class="text-center">Fecha de Inscripcion</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inscripciones as $inscripcion)
                <tr>
                    <td class="text-center">{{ $inscripcion->id }}</td>
                    <td class="text-center">{{ $inscripcion->estudiante->nombre }}</td>
                    <td class="text-center">{{ $inscripcion->curso->titulo }}</td>
                    <td class="text-center">{{ $inscripcion->f_inscripcion }}</td>
                    <td class="text-center">
                    <a href="{{ route('inscripciones.edit', $inscripcion) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('inscripciones.show', $inscripcion) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('inscripciones.destroy', $inscripcion) }}" method="POST" style="display:inline;">
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
                    $('#inscripciones').DataTable({
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