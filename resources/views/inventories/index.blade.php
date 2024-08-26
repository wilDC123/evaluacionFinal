@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Inventario</h1>
@stop

@section('content')
    <a href="{{ route('inventories.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="inventories" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-inventories  text-white" style="background-color: #515E78;">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->id }}</td>
                    <td>{{ $inventory->item_name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->price }}</td>
                    <td>{{ $inventory->date }}</td>
                    <td>{{ $inventory->supplier->name }}</td>
                    <td>
                    <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('inventories.show', $inventory) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" style="display:inline;">
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
        .tabla-inventories th, .tabla-inventories td {
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
                    $('#inventories').DataTable({
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