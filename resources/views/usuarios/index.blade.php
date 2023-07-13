@extends('layouts.index')

<title>@yield('title') Usuarios</title>

@section('css-datatable')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')

    <div class="container-fluid" style="margin-top: 11%">
        <div class="p-3" style="background: rgb(255, 253, 253); border-radius: 20px;">
            <div class="d-flex align-items-center justify-content-between mb-2">
               
                <h2 style="color: black; margin-left: 38%;">Gestión de los Usuarios</h2>
                
                <div>
                    {{-- @can('ver-rol')
                        <a href="/roles" style="height: 35px; margin-right: 43px; " class="btn btn-sm btn-success"><i class=" fas fa-user-lock me-2"></i><span>Roles</span></a>
                    @endcan --}}

                    @can('crear-usuario')
                        <form action="{{ route('usuarios.create') }}" method="get" style="display:inline;">
                            <button type="submit" class="btn btn-sm btn-light"><i class="bi bi-person-plus-fill"></i></button>
                        </form>
                    @endcan
                </div>

            </div>
            <div class="">
                <table id="usuarios" class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th style="color: black;">Nombre</th>
                            <th style="color: black;">E-mail</th>
                            <th style="color: black;">Usuario</th>
                            <th style="color: black;">Rol</th>
                            <th style="color: black;"><center>Acciones</center> </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($usuarios as $usuario)
                                <tr>
                                    <!-- <td style="color: black;">{{ $usuario->id}}</td> -->
                                    <td style="color: black;">{{ $usuario->name }}</td>
                                    <td style="color: black;">{{ $usuario->email }}</td>
                                    <td style="color: black;">{{ $usuario->username }}</td>
                                    <td>
                                        @if(!empty($usuario->getRoleNames()))
                                          @foreach($usuario->getRoleNames() as $rolNombre)                                       
                                            <span style="color: black;">{{ $rolNombre }}</span>
                                          @endforeach
                                        @endif
                                      </td>
                                    <td>
                                        @can('editar-usuario')
                                            <a class="btn btn-warning" style="margin-left: 20%;" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        @endcan

                                        @can('borrar-usuario')
                                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="sweetalert" style="display:inline;">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit" value=""><i class="bi bi-trash"></i></button>
                                            </form> 
                                        @endcan
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @section('js-datatable')
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
                
        <script>
            $(document).ready(function () {
                $('#usuarios').DataTable({
                    
                    responsive: true,
                    autoWidth: false,

                    "language": {       
                        "lengthMenu": "Mostrar " + 
                                        `<select class = 'form-select'>
                                            <option value = '5'>5</option>
                                            <option value = '10'>10</option>
                                            <option value = '15'>15</option>
                                            <option value = '25'>25</option>
                                            <option value = '50'>50</option>
                                            <option value = '100'>100</option>
                                            <option value = '-1'>Todos</option>
                                        </select>` +
                                        " Registros Por Página",
                        "infoEmpty": 'No Hay Registros Disponibles.',
                        "zeroRecords": 'Nada Encontrado Disculpa.',
                        "info": 'Mostrando La Página _PAGE_ de _PAGES_',
                        "infoFiltered": '(Filtrado de _MAX_ Registros Totales)',
                        "search": "Buscar: ",
                        "paginate": {
                            'next': 'Siguiente',
                            'previous': 'Anterior',
                        },
                        decimal: ',',
                        thousands: '.',
                    },
                });
            });
        </script>
    @endsection

@endsection

@section('sweetalert')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @if (session('eliminar') == 'ok')

            <script>
                Swal.fire(
                '¡Eliminado!',
                'Se Eliminó Con Éxito.',
                'success'
                )
            </script>
            
        @endif

            <script>

                $('.sweetalert').submit(function(e){
                    e.preventDefault();

                            Swal.fire({
                            title: '¿Estás Seguro?',
                            text: "Al Hacer Estó Se Eliminará Definitivamente!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: '¡Si, Eliminar!',
                            cancelButtonText: 'Cancelar',
                            }).then((result) => {
                        if (result.isConfirmed) {

                            this.submit();
                        }
                        })
                });

            
            </script>
    
@endsection