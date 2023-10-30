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
                
            {{-- @can('generar-equipo')
                <a href="{{ url('equipo/pdf') }}" class="btn btn-sm btn-danger" target="_blank">
                {{ ('PDF') }}
                </a>
            @endcan --}}

                <h2 style="color: black;  margin-left: 44%;">Reporte</h2>

            </div>
            <div class="">
                      <button class="btn btn-outline-secondary" type="submit">Filtrar</button>
                      
                        <a href="{{ url('reportes/pdf') }}" id="btn_toprint" class="btn btn-sm btn-danger" target="_blank">{{ ('PDF') }}</a>
                    </div>
                </form>

                <hr>
                <table id="equipos" class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th>N</th>
                            <th  style="color: black;">Division</th>
                            <th  style="color: black;">Nombre</th>
                            <th  style="color: black;">Apellido</th>
                            <th  style="color: black;">Id.Usuario</th>
                            <th  style="color: black;">División</th>
                            <th  style="color: black;">Sede</th>
                            <th  style="color: black;">Serial</th>
                            <th  style="color: black;">Serial Activo</th>
                            <th  style="color: black;">Estatus</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($resultados as $resultado)
                                <tr>
                                    <td style="color: black;">{{ $loop->iteration }}</td>
                                    <td style="color: black;">{{ $resultado->nombre }}</td>
                                    <td style="color: black;">{{ $resultado->apellido }}</td>
                                    <td style="color: black;">{{ $resultado->cedula }}</td>
                                    <td style="color: black;">{{ $resultado->id_usuario }}</td>
                                    <td style="color: black;">{{ $resultado->nombre_division }}</td>
                                    <td style="color: black;">{{ $resultado->nombre_sede }}</td>
                                    <td style="color: black;">{{ $resultado->serial }}</td>
                                    <td style="color: black;">{{ $resultado->serialA }}</td>
                                    <td style="color: black;">{{ $resultado->estatus }}</td>
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


    <!-- @section('scripts')
        @parent
        <script>
            $(document).ready(function() {
                $('#btn_toprint').click(function (e) {
                    e.preventDefault();
                    var personId = $('#personId').val();
                    var sedeId = $('#sedeId').val();
                    var divisionId = $('#divisionId').val();
                    var estatus = $('#estatus').val();
                    var url = '{{ route("reportes.pdf") }}?personId=_pid_&sedeId=_sid_&divisionId=_did_&estatus=_eid_';
                    url = url.replace('_pid_', personId); url = url.replace('_sid_', sedeId); url = url.replace('_did_', divisionId);url = url.replace('_eid_', estatus);
                    window.open(url,'_blank');
                });
            });
        </script>
    @endsection -->

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

