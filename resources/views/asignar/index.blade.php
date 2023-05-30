@extends('layouts.index')

<title>@yield('title') Asignar</title>

@section('css-datatable')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')

    <div class="container-fluid" style="margin-top: 2%">
        <div class="p-3" style="background: rgb(240, 236, 236); border-radius: 20px;">
            <div class="d-flex align-items-center justify-content-between mb-2">
                
                <h2 style="color: black; margin-left: 30%;">Gestión de la Asignación de Équipos</h2>
                
                {{-- @can('crear-cargo') --}}
                    <form action="{{ url('asignar/create') }}" method="get">
                        <button type="submit" class="btn btn-sm btn-light"><i class="bi bi-person-plus-fill"></i></button>
                    </form>
                {{-- @endcan --}}

            </div>
            <div class="">
                <table id="asignar" class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th  style="color: black;">Persona (Cédula)</th>
                            <th  style="color: black;">Persona (Nombre)</th>
                            <th  style="color: black;">Persona (Apellido)</th>
                            <th  style="color: black;">Equipo (CPU)</th>
                            <th  style="color: black;">Equipo (Serial)</th>
                            <th  style="color: black;">Equipo (SerialA)</th>
                            <th  style="color: black;">Equipo (S.O)</th>
                            <th  style="color: black;">Periférico (Tipo)</th>
                            <th  style="color: black;">Periférico (Marca)</th>
                            <th  style="color: black;">Periférico (Modelo)</th>
                            <th  style="color: black;">Periférico (Serial)</th>
                            <th  style="color: black;">Periférico (Serial)</th>
                            <th class="col-2" style="color: black;"><center>Acciones</center></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($asignaciones as $asignacion)
                                <tr>
                                    <!-- <td style="color: black;">{{ $asignacion->id}}</td> -->
                                    <td class="" style="color: black;">{{ $asignacion->persona->cedula }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->persona->nombre }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->persona->apellido }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->equipo->cpu }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->equipo->serial }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->equipo->serialA }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->equipo->sistema->tipo }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->periferico->tipo_periferico->tipo }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->periferico->marca->nombre_marca }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->periferico->modelo->nombre_modelo }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->periferico->serial }}</td>
                                    <td class="" style="color: black;">{{ $asignacion->periferico->serialA }}</td>

                                    <td> 
                                        {{-- @can('editar-cargo') --}}
                                        {{-- <a class="btn btn-warning" style="margin-left: 30%;" href="{{ url('/asignar/'.$asignacion->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a> --}}
                                        {{-- @endcan --}}
                                        
                                        {{-- @can('borrar-cargo') --}}
                                            {{-- <form action="{{ url('/asignar/'.$asignacion->id) }}" method="POST" class="sweetalert" style="display:inline;">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit" value=""><i class="bi bi-trash"></i></button>
                                            </form>  --}}
                                        {{-- @endcan --}}
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{--     @section('js-datatable')
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
                
        <script>
            $(document).ready(function () {
                $('#asignar').DataTable({
                    
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
    @endsection --}}

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