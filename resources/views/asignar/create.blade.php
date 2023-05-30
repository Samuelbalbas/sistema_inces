@extends('layouts.index')

<title>@yield('title') Asignar Équipos</title>

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
            <div class="p-3" style="background: rgb(255, 253, 253); margin-top: 20vh; border-radius: 20px;">
                    
                    <center>
                        <h3 class="mb-4" style="color: black;">Asignación</h3>
                    </center>
                    
                    <form method="post" action="{{ url('/asignar') }}" enctype="multipart/form-data" onsubmit="">
                        @csrf
                        <div class="row">

                            <div class="col-3">
                                <label for="persona" style="color: black;">Persona</label>
                                <select class="form-select" id="persona" name="id_persona">
                                    <option value="0">Seleccione una Persona</option>
                                    @foreach($personas as $persona)
                                        <option value="{{ $persona->id }}">{{ $persona->nombre }}  {{ $persona->apellido }} - {{ $persona->cedula }}</option>
                                    @endforeach
                                </select>                            
                            </div>

                            <div class="col-3">
                                <label for="equipo" style="color: black;">Equipo</label>
                                <select class="form-select" id="equipo" name="id_equipo">
                                    <option value="0">Seleccione un Équipo</option>
                                    @foreach($equipos as $equipo)
                                        <option value="{{ $equipo->id }}">{{ $equipo->marca->nombre_marca }} {{ $equipo->modelo->nombre_modelo }} {{ $equipo->serial }} {{ $equipo->serialA }} {{ $equipo->cpu }} {{ $equipo->velocidad }} {{ $equipo->ram }} {{ $equipo->disco }} {{ $equipo->sistema->tipo }}</option>
                                    @endforeach
                                </select>                            
                            </div>
                            
                            <div class="col-3">
                                <label for="periferico" style="color: black;">Periféricos</label>
                                <select class="form-select" id="periferico" name="id_periferico">
                                    <option value="0">Seleccione un Periférico</option>
                                    @foreach($perifericos as $periferico)
                                        <option value="{{ $periferico->id }}">{{ $periferico->tipo_periferico->tipo }} {{ $equipo->marca->nombre_marca }} {{ $equipo->modelo->nombre_modelo }} {{ $equipo->serial }} {{ $equipo->serialA }}</option>
                                    @endforeach
                                </select>                            
                            </div>
                            
                            {{-- <div class="form-check col-2">
                                <label class="form-check-label" style="color: black; margin-top: 2.5px ; margin-left: 6%;" for="activo">Activo</label>
                                <input class="form-check-input" style="border-color: black; margin-left: 34%; margin-top: 10px;" type="radio" name="estatus" id="activo" value="Activo">
                            </div>

                            <div class="form-check col-2">
                                <label class="form-check-label" style="color: black; margin-left: 14% ; margin-top: 2.5px ;" for="inactivo">Inactivo</label>
                                <input class="form-check-input" style="border-color: black; margin-left: 36%; margin-top: 10px;" type="radio" name="estatus" id="inactivo" value="Inactivo">
                            </div> --}}

                        </div>

                        <br>
                        <center>
                        
                        <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                        <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('asignar/') }}"> Regresar </a>
                        </center>
                        
                    </form>
                </div>
            </div> 
        </div>
    </div>
@endsection