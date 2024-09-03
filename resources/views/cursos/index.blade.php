@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <h1>Lista de Cursos</h1>
@stop

@section('content')
    <a href="{{ route('cursos.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="cursos" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-cursos  text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th class="text-center">Titulo</th>
                <th class="text-center">Descripcion</th>
                <th class="text-center">Ubicacion</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td class="text-center">{{ $curso->id }}</td>
                    <td class="text-center">{{ $curso->titulo }}</td>
                    <td class="text-center">{{ $curso->descripcion }}</td>
                    <td class="text-center">{{ $curso->ubicacion }}</td>
                    <td class="text-center">
                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('cursos.show', $curso) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display:inline;">
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

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function(){
                    $('#cursos').DataTable({
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