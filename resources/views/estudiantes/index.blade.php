@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>Lista de Estudiantes</h1>
@stop

@section('content')
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="estudiantes" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-estudiantes  text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th class="text-center">Nombre</th>
                <th class="text-center">C.I</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Fecha de Nacimiento</th>
                <th class="text-center">Genero</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td class="text-center">{{ $estudiante->id }}</td>
                    <td class="text-center">{{ $estudiante->nombre }}</td>
                    <td class="text-center">{{ $estudiante->ci }}</td>
                    <td class="text-center">{{ $estudiante->correo }}</td>
                    <td class="text-center">{{ $estudiante->telefono }}</td>
                    <td class="text-center">{{ $estudiante->f_nacimiento }}</td>
                    <td class="text-center">{{ $estudiante->genero }}</td>
                    <td class="text-center">
                    <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" style="display:inline;">
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
                    $('#estudiantes').DataTable({
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