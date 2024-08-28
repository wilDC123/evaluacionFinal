@extends('adminlte::page')

@section('title', 'Cargo')

@section('content_header')
    <h1>Cargos</h1>
@stop

@section('content')
    <a href="{{ route('positions.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="positions" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-positions  text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th class="text-center">Nombre</th>
                <th class="text-center">Descripcion</th>
                <th class="text-center">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $position)
                <tr>
                    <td class="text-center">{{ $position->id }}</td>
                    <td class="text-center">{{ $position->job }}</td>
                    <td class="text-center">{{ $position->description }}</td>
                    <td class="text-center">
                    <a href="{{ route('positions.edit', $position) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('positions.show', $position) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('positions.destroy', $position) }}" method="POST" style="display:inline;">
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
    .tabla-positions th, .tabla-positions td {
        text-align: center;
    }
    .btn i {
        margin-right: 5px;
    }
</style>


@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function(){
                    $('#positions').DataTable({
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