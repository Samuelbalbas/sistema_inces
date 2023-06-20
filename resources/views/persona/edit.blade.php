@extends('layouts.index')

<title>@yield('title') Editar Persona</title>
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>

@section('content')

    <div class="container-fluid" style="margin-top: 18%">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
            <div class="p-3" style="background: rgb(255, 253, 253); border-radius: 20px;">
                    
                    <center>
                        <h3 class="mb-4" style="color: black;">Editar Persona</h3>
                    </center>
                    
                    <form method="post" action="{{ route('persona.update', $persona->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-3">
                                <label style="color: black;">Nombre de la Persona</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $persona->nombre }}" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label style="color: black;">Apellido de la Persona</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" value="{{ $persona->apellido }}" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label style="color: black;">Cédula de la Persona</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" value="{{ $persona->cedula }}" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label style="color: black;">Id.Usuario de la Persona</label>
                                <input type="text" class="form-control" name="id_usuario" id="id_usuario" value="{{ $persona->id_usuario }}" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label for="cargo" style="color: black;">Cargo de la Persona</label>
                                <select class="form-select" id="cargo" name="id_cargo">
                                    <option value="0">Seleccione un cargo</option>
                                    @foreach($cargos as $cargo)
                                        <option value="{{ $cargo->id }}" {{ $cargo->id == $persona->id_cargo ? 'selected' : '' }}>{{ $cargo->nombre_cargo }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label style="color: black;">Teléfono de la Persona</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $persona->telefono }}" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label for="sede" style="color: black;">Sede</label>
                                <select class="form-select" id="id_sede" name="id_sede" onchange="fetchDivisiones(this)">
                                    <option value="0">Seleccione una sede</option>
                                    @foreach ($sedes as $sede)
                                        <option value="{{ $sede->id }}" data-url="{{ route('divisiones.by.sede', $sede->id) }}" {{ $sede->id === $id_sede ? 'selected' : '' }}>{{ $sede->nombre_sede }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-3">
                                <label for="division" style="color: black;">División de la Persona</label>

                                <select class="form-select" id="id_division" name="id_division" onchange="setDivisionSedeId()">
    @foreach ($divisiones as $id => $nombre)
        <option value="{{ $id }}" {{ $id_division == $id ? 'selected' : '' }} data-division-sede-id="{{ $persona->divisionesSedes->first()->division_sede_id ?? '' }}">
            {{ $nombre }}
        </option>
    @endforeach
</select>


                            </div>
                        </div>
                        <input type="text" id="id_division_sede" name="id_division_sede" value="{{ $persona->divisionesSedes->first()->id_division_sede ?? '' }}">
                        <br><br>
                        <center>
                            <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                            <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('persona/') }}"> Regresar </a>
                        </center>
                    </form>

                    <script>
    function fetchDivisiones(selectElement) {
        var sedeId = document.getElementById('id_sede').value;
        var url = selectElement.options[selectElement.selectedIndex].getAttribute('data-url');

        if (sedeId === '0') {
            // Si no se ha seleccionado ninguna sede, se vacía el select de divisiones
            var divisionSelect = document.getElementById('id_division');
            divisionSelect.innerHTML = '<option value="0">Seleccione una división</option>';
            document.getElementById('id_division_sede').value = ""; // Actualizamos el valor del campo oculto a vacío
            return;
        }

        var divisionSelect = document.getElementById('id_division');
        divisionSelect.innerHTML = '<option value="0">Cargando divisiones...</option>';

        // Realizar una petición AJAX utilizando fetch
        fetch(url)
            .then(function(response) {
                if (!response.ok) {
                    throw new Error('Error en la solicitud');
                }
                return response.json();
            })
            .then(function(data) {
                var divisiones = data;

                // Limpiar el select de divisiones
                divisionSelect.innerHTML = '';

                // Agregar las opciones al select de divisiones
                for (var divisionId in divisiones) {
                    var divisionNombre = divisiones[divisionId];
                    var option = new Option(divisionNombre, divisionId);
                    divisionSelect.add(option);
                }

                // Obtener el nuevo ID de la tabla division_sede seleccionado
                var nuevoIdDivisionSede = divisionSelect.value;

                // Actualizar el valor del campo oculto con el nuevo ID de division_sede
                document.getElementById('id_division_sede').value = nuevoIdDivisionSede;
            })
            .catch(function(error) {
                console.log(error);
                divisionSelect.innerHTML = '<option value="0">Error al cargar las divisiones</option>';
            });
    }

    function setDivisionSedeId() {
    var divisionSelect = document.getElementById('id_division');
    var selectedOption = divisionSelect.options[divisionSelect.selectedIndex];
    var divisionSedeId = selectedOption.getAttribute('data-division-sede-id');
    document.getElementById('id_division_sede').value = divisionSedeId;
}


    // Escuchar el evento de cambio de sede
    document.getElementById('id_sede').addEventListener('change', function(event) {
        fetchDivisiones(this);
        setDivisionSedeId();
    });

    // Escuchar el evento de cambio de división
    document.getElementById('id_division').addEventListener('change', function(event) {
        setDivisionSedeId();
    });
</script>






                </div>
            </div> 
        </div>
    </div>

@endsection