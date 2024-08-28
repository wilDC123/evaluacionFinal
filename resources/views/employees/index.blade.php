@extends('adminlte::page')

@section('title', 'Cita')

@section('content_header')
    <h1>Detalles de cita</h1>
@stop

@section('content')
    <a href="{{ route('employees.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="employees" class="table table-bordered shadow-lg mt-12">
        <thead class="tabla-employees  text-white" style="background-color: #515E78;">
            <tr>
                <th class="text-center">Nº</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Apellido</th>
                <th class="text-center">C.I</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Cumpleaños</th>
                <th class="text-center">Direccion</th>
                <th class="text-center">Ciudad</th>
                <th class="text-center">Pais</th>
                <th class="text-center">Cargo</th>
                <th class="text-center">Departamento</th>
                <th class="text-center">Fecha de Contrato</th>
                <th class="text-center">Salario</th>
                <th class="text-center">Genero</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td class="text-center">{{ $employee->id }}</td>
                    <td class="text-center">{{ $employee->first_name }}</td>
                    <td class="text-center">{{ $employee->last_name }}</td>
                    <td class="text-center">{{ $employee->ci }}</td>
                    <td class="text-center">{{ $employee->email }}</td>
                    <td class="text-center">{{ $employee->phone}}</td>
                    <td class="text-center">{{ $employee->birth_date }}</td>
                    <td class="text-center">{{ $employee->address }}</td>
                    <td class="text-center">{{ $employee->city }}</td>
                    <td class="text-center">{{ $employee->country }}</td>
                    <td class="text-center">{{ $employee->position->job }}</td>
                    <td class="text-center">{{ $employee->department->name }}</td>
                    <td class="text-center">{{ $employee->hire_date }}</td>
                    <td class="text-center">{{ $employee->salary }}</td>
                    <td class="text-center">{{ $employee->gender }}</td>
                    <td>
                    <a href="{{ route('employees.edit', $employee) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('employees.show', $employee) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
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