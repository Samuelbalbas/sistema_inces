@extends('layouts.index')

<title>@yield('title') Desincorporar</title>
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>

@section('content')

    <div class="container-fluid" style="margin-top: 18%">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
                <div class="p-3" style="background: rgb(255, 253, 253); border-radius: 20px;">

                    <center>
                        <h3 class="mb-4" style="color: black;">Desincorporar</h3>
                    </center>
                    <form method="post" action="{{ route('asignar.updateByPerson', ['id' => $asignacion->persona->id]) }}" enctype="multipart/form-data" onsubmit="">

                        @csrf   
                        @method('PUT')
                        <div class="row">

                            <div class="col-3">
                                <label for="persona" style="color: black;">Persona</label>
                                <select class="form-select" id="persona" name="id_persona" disabled>
                                    <option value="0">Seleccione una Persona</option>
                                    @foreach($personas as $persona)
                                        <option value="{{ $persona->id }}" @if($persona->id == $asignacion->id_persona) selected @endif>{{ $persona->nombre }}  {{ $persona->apellido }} - {{ $persona->cedula }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-3">
                                <label for="equipo" style="color: black;">Equipo</label>
                                <select class="form-select" id="equipo" name="id_equipo" disabled>
                                    <option value="0">Seleccione un Équipo</option>
                                    @foreach($equipos as $equipo)
                                        <option value="{{ $equipo->id }}" @if($equipo->id == $asignacion->id_equipo) selected @endif>{{ $equipo->marca->nombre_marca }} {{ $equipo->modelo->nombre_modelo }} {{ $equipo->serial }} {{ $equipo->serialA }} {{ $equipo->cpu }} {{ $equipo->velocidad }} {{ $equipo->ram }} {{ $equipo->disco }} {{ $equipo->sistema->tipo }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-3">
                                <label for="periferico" style="color: black;">Periféricos</label>
                                @foreach($tipo_perifericos as $tipo_periferico)
                                    <div>
                                        <input disabled type="checkbox" class="form-check-input" id="periferico-{{ $tipo_periferico->id }}" name="tipo_periferico[]" value="{{ $tipo_periferico->id }}" @if(array_key_exists($tipo_periferico->id, $ids_perifericos_por_tipo)) checked @endif onchange="togglePeriferico({{ $tipo_periferico->id }})">
                                            <label for="periferico-{{ $tipo_periferico->id }}">{{ $tipo_periferico->tipo }}</label>
                                            <select disabled class="form-select periferico-select" id="select-periferico-{{ $tipo_periferico->id }}" name="id_periferico[]" @if(!array_key_exists($tipo_periferico->id, $ids_perifericos_por_tipo)) style="display: none;" @endif>
                                                <option value="0">Seleccione un {{ $tipo_periferico->tipo }}</option>
                                                @foreach($perifericos as $periferico)
                                                    @if ($periferico->id_tipo == $tipo_periferico->id)
                                                        <option value="{{ $periferico->id }}" @if(array_key_exists($tipo_periferico->id, $ids_perifericos_por_tipo) && $ids_perifericos_por_tipo[$tipo_periferico->id] == $periferico->id) selected @endif>{{ $periferico->marca->nombre_marca }} {{ $periferico->modelo->nombre_modelo }} {{ $periferico->serial }} {{ $periferico->serialA }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-3">
                                <label for="" style="color: black;">Estatus</label>
                                <div class="form-check">
                                    <label class="form-check-label" style="color: black;" for="asignado">Asignado</label>
                                    <input class="form-check-input" style="border-color: black;" type="radio" name="estatus" id="asignado" value="Asignado" {{ ($asignacion->estatus=="Asignado")? "checked" : ""}} >
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label" style="color: black;" for="desincorporado">Desincorporado</label>
                                    <input class="form-check-input" style="border-color: black;" type="radio" name="estatus" id="desincorporado" value="Desincorporado" {{ ($asignacion->estatus=="Desincorporado")? "checked" : ""}} >
                                </div>
                           
                                <textarea class="form-control" name="observacion" placeholder="Observación" id="floatingTextarea" style="height: 220px; width: 270px; display:none;"></textarea>
                                
                            </div>

                        </div>
                        <input type="hidden" name="asignacion_index[]" value="{{ $asignacion->id }}">


                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                            <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('asignar/') }}"> Regresar </a>
                        </center>

                    </form>
                    <script>
                        function togglePeriferico(id) {
                            var checkbox = document.getElementById('periferico-' + id);
                            var select = document.getElementById('select-periferico-' + id);
                            if (checkbox.checked) {
                                select.style.display = 'block';
                            } else {
                                select.style.display = 'none';
                                select.value = '0';
                            }
                        }
                    </script>

                    <script>
                        document.getElementById('desincorporado').onclick = function() {
                        if (this.checked) {
                            document.getElementById('floatingTextarea').style.display = 'block';
                        } else {
                            document.getElementById('floatingTextarea').style.display = 'none';
                        }
                        }
                    </script>

                </div>
            </div> 
        </div>
    </div>
@endsection