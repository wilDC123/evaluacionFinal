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
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Proveedor</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td class="text-center">{{ $inventory->id }}</td>
                    <td class="text-center">{{ $inventory->item_name }}</td>
                    <td class="text-center">{{ $inventory->quantity }}</td>
                    <td class="text-center">{{ $inventory->price }}</td>
                    <td class="text-center">{{ $inventory->date }}</td>
                    <td class="text-center">{{ $inventory->supplier->name }}</td>
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