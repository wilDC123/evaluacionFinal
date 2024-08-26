@extends('adminlte::page')

@section('title', 'Proveedor')

@section('content_header')
    <h1>Suppliers</h1>
@stop

@section('content')
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="suppliers" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-suppliers  text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th>Nombre</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>
                    <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('suppliers.show', $supplier) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" style="display:inline;">
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
    .tabla-suppliers th, .tabla-suppliers td {
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
                    $('#suppliers').DataTable({
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