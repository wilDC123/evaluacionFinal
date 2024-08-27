@extends('adminlte::page')

@section('title', 'Proveedor')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    <a href="{{ route('clients.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="clients" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-clients  text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th class="text-center">Nombre</th>
                <th class="text-center">C.I</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Direccion</th>
                <th class="text-center">Ciudad</th>
                <th class="text-center">Pais</th>
                <th class="text-center">Fecha de Nacimiento</th>
                <th class="text-center">Genero</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td class="text-center">{{ $client->id }}</td>
                    <td class="text-center">{{ $client->name }}</td>
                    <td class="text-center">{{ $client->ci }}</td>
                    <td class="text-center">{{ $client->email }}</td>
                    <td class="text-center">{{ $client->phone }}</td>
                    <td class="text-center">{{ $client->address }}</td>
                    <td class="text-center">{{ $client->city }}</td>
                    <td class="text-center">{{ $client->country }}</td>
                    <td class="text-center">{{ $client->birth_date }}</td>
                    <td class="text-center">{{ $client->gender }}</td>
                    <td class="text-center">
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('clients.show', $client) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
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
    .tabla-clients th, .tabla-clients td {
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
                    $('#clients').DataTable({
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