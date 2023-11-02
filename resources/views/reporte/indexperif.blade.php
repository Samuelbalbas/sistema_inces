@extends('layouts.index')

<title>@yield('title') Reportes</title>

@section('css-datatable')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')

    <div class="container-fluid" style="margin-top: 11%">
        <div class="p-3" style="background:rgb(255, 253, 253); border-radius: 20px;">
            <div class="d-flex align-items-center justify-content-between mb-2">
                
            <a href="{{ url('reportes/perifpdf') }}" id="btn_toprint" class="btn btn-sm btn-danger" target="_blank">{{ ('PDF') }}</a>

                <h2 style="color: black;  margin-right: 44%;">Reporte Periféricos</h2>

            </div>    
                <table id="equipos" class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th>N</th>
                            <th  style="color: black;">Cedula</th>
                            <th  style="color: black;">Nombre</th>
                            <th  style="color: black;">Apellido</th>
                            <th  style="color: black;">División</th>
                            <th  style="color: black;">Sede</th>
                            <th  style="color: black;">Tipo de Periférico</th>
                            <th  style="color: black;">Marca</th>
                            <th  style="color: black;">Modelo</th>
                            <th  style="color: black;">Serial</th>
                            <th  style="color: black;">Serial Activo</th>
                            <th  style="color: black;">Estatus</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($perifs as $perif)
                                <tr>
                                    <td style="color: black;">{{ $loop->iteration }}</td>
                                    <td style="color: black;">{{ $perif->cedula }}</td>
                                    <td style="color: black;">{{ $perif->nombre }}</td>
                                    <td style="color: black;">{{ $perif->apellido }}</td>
                                    <td style="color: black;">{{ $perif->nombre_division }}</td>
                                    <td style="color: black;">{{ $perif->nombre_sede }}</td>
                                    <td style="color: black;">{{ $perif->tipo }}</td>
                                    <td style="color: black;">{{ $perif->nombre_marca }}</td>
                                    <td style="color: black;">{{ $perif->nombre_modelo }}</td>
                                    <td style="color: black;">{{ $perif->serial }}</td>
                                    <td style="color: black;">{{ $perif->serialA }}</td>
                                    <td style="color: black;">{{ $perif->estatus }}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <script>
        var errorMessage = @json($errors->first());
        alert(errorMessage);
    </script>
@endif

    @section('js-datatable')
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
                
        <script>
            $(document).ready(function () {
                $('#equipos').DataTable({
                    
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

