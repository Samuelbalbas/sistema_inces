@extends('layouts.index')

<title>@yield('title') Inventario</title>

@section('css-datatable')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content')

    <div class="container-fluid" style="margin-top: 18%">
        <div class="p-3" style="background: rgb(255, 253, 253); border-radius: 20px;">
            <div class="d-flex align-items-center justify-content-between mb-2">
                
                <h2 style="color: black; margin-left: 30%;">Gestión de Inventario de los Équipos</h2>
                
                {{-- @can('crear-cargo') --}}
                    <form action="{{ url('asignar/create') }}" method="get">
                        <button type="submit" class="btn btn-sm btn-light"><i class="bi bi-box-arrow-right"></i></button>
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
                            <th  style="color: black;">Periférico (Tipo),(Marca),(Modelo),(Serial),(SerialA)</th>
                            {{-- <th  style="color: black;">Periférico (Marca)</th>
                            <th  style="color: black;">Periférico (Modelo)</th>
                            <th  style="color: black;">Periférico (Serial)</th>
                            <th  style="color: black;">Periférico (Serial)</th> --}}
                            <th  style="color: black;">Estatus</th>
                            <th class="col-2" style="color: black;"><center>Acciones</center></th>
                        </tr>
                    </thead>
                    <tbody>
                
                   @foreach ($asignacionesAgrupadas as $asignacionesGrupo)
                        <tr>
                            <td class="" style="color: black;">{{ $asignacionesGrupo->first()->persona->cedula }}</td>
                            <td class="" style="color: black;">{{ $asignacionesGrupo->first()->persona->nombre }}</td>
                            <td class="" style="color: black;">{{ $asignacionesGrupo->first()->persona->apellido }}</td>
                            <td class="" style="color: black;">{{ $asignacionesGrupo->first()->equipo->cpu }}</td>
                            <td class="" style="color: black;">{{ $asignacionesGrupo->first()->equipo->serial }}</td>
                            <td class="" style="color: black;">{{ $asignacionesGrupo->first()->equipo->serialA }}</td>
                            <td class="" style="color: black;">{{ $asignacionesGrupo->first()->equipo->sistema->tipo }}</td>
                            <td class="" style="color: black;">
                                @foreach ($asignacionesGrupo as $asignacion)
                                    {{ $asignacion->periferico->tipo_periferico->tipo }} ({{ $asignacion->periferico->marca->nombre_marca }}, {{ $asignacion->periferico->modelo->nombre_modelo }}, {{ $asignacion->periferico->serial }}, {{ $asignacion->periferico->serialA }}) 
                                    <br>
                                @endforeach
                            </td>
                            
                            <td class="" style="color: black;">{{ $asignacionesGrupo->first()->estatus }}</td>

                            <td>
                                <a class="btn btn-warning" style="margin-left: 30%;" href="{{ url('/asignar/'.$asignacionesGrupo->first()->persona->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a>
                                {{-- @can('')  --}}
                                    <form action="{{ url('/asignar/'.$asignacionesGrupo->first()->persona->id.'/desincorporar') }}" method="GET" class="" style="display:inline;">
                                        {{-- @csrf --}}
                                        
                                        <button class="btn btn-danger" type="submit" value=""><i class="bi bi-box-arrow-left"></i></button>
                                    </form>
                               {{--  @endcan --}}
                            </td>
                        </tr> 
                     @endforeach

                    {{-- @foreach ($asignacionesAgrupadas as $asignacionesGrupo)
                            <tr>
                                <td class="" style="color: black;">{{ $asignacionesGrupo->first()->persona->cedula }}</td>
                                <td class="" style="color: black;">{{ $asignacionesGrupo->first()->persona->nombre }}</td>
                                <td class="" style="color: black;">{{ $asignacionesGrupo->first()->persona->apellido }}</td>
                                <td class="" style="color: black;">{{ $asignacionesGrupo->first()->equipo->cpu }}</td>
                                <td class="" style="color: black;">{{ $asignacionesGrupo->first()->equipo->serial }}</td>
                                <td class="" style="color: black;">{{ $asignacionesGrupo->first()->equipo->serialA }}</td>
                                <td class="" style="color: black;">{{ $asignacionesGrupo->first()->equipo->sistema->tipo }}</td>

                                <td class="" style="color: black;">
                                    @foreach ($asignacionesGrupo as $asignacion)
                                        {{ $asignacion->periferico->tipo_periferico->tipo }}<br>
                                    @endforeach
                                </td>
                                <td class="" style="color: black;">
                                    @foreach ($asignacionesGrupo as $asignacion)
                                        {{ $asignacion->periferico->marca->nombre_marca }}<br>
                                    @endforeach
                                </td>
                                <td class="" style="color: black;">
                                    @foreach ($asignacionesGrupo as $asignacion)
                                        {{ $asignacion->periferico->modelo->nombre_modelo }}<br>
                                    @endforeach
                                </td>
                                <td class="" style="color: black;">
                                    @foreach ($asignacionesGrupo as $asignacion)
                                        {{ $asignacion->periferico->serial }}<br>
                                    @endforeach
                                </td>
                                <td class="" style="color: black;">
                                    @foreach ($asignacionesGrupo as $asignacion)
                                        {{ $asignacion->periferico->serialA }}<br>
                                    @endforeach
                                </td> 

                                <td class="" style="color: black;">{{ $asignacionesGrupo->first()->estatus }}</td>

                                <td>
                                    <a class="btn btn-warning" style="margin-left: 30%;" href="{{ url('/asignar/'.$asignacionesGrupo->first()->persona->id.'/edit') }}"><i class="bi bi-pencil-square"></i></a>
                                    @can('borrar-cargo') 
                                         <form action="{{ url('/asignar/'.$asignacionesGrupo->first()->id) }}" method="POST" class="sweetalert" style="display:inline;">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger" type="submit" value=""><i class="bi bi-trash"></i></button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach --}}
                            

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