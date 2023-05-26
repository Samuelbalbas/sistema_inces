@extends('layouts.index')

<title>@yield('title') Periféricos</title>

@section('css-datatable')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')

    <div class="container-fluid" style="margin-top: 2.5%">
        <div class="p-3" style="background: rgb(240, 236, 236); border-radius: 20px;">
            <div class="d-flex align-items-center justify-content-between mb-2">
                
                
                <h2 style="color: black;  margin-left: 33%;">Gestión del Periférico</h2>
                
                @can('crear-periferico')
                    <form action="{{ url('periferico/create') }}" method="get">
                        <button type="submit" class="btn btn-sm btn-light"><i class="bi bi-person-plus-fill"></i></button>
                    </form>
                @endcan

            </div>
            <div class="">
                <table id="perifericos" class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th  style="color: black;">Nombre</th>
                            <th  style="color: black;">Marca</th>
                            <th  style="color: black;">Modelo</th>
                            <th  style="color: black;">Serial</th>
                            <th  style="color: black;">Serial Activo</th>
                            <th class="col-2" style="color: black;"><center>Acciones</center></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($perifericos as $periferico)
                                <tr>
                                    <!-- <td style="color: black;">{{ $periferico->id}}</td> -->
                                    <td style="color: black;">{{ $periferico->periferic }}</td>
                                    <td style="color: black;">{{ $periferico->marca->nombre_marca }}</td>
                                    <td style="color: black;">{{ $periferico->modelo->nombre_modelo }}</td>
                                    <td style="color: black;">{{ $periferico->serial}}</td>
                                    <td style="color: black;">{{ $periferico->serialA }}</td>

                                    <td> 
                                        @can('editar-periferico')
                                            <a class="btn btn-warning" style="margin-left: 30%;" href="{{ url('/periferico/'.$periferico->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a>
                                        @endcan

                                        @can('borrar-periferico')
                                            <form action="{{ url('/periferico/'.$periferico->id) }}" method="POST" class="sweetalert" style="display: inline; ">
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
                $('#perifericos').DataTable({
                    
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