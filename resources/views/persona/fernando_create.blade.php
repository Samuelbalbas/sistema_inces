@extends('layouts.index')

<title>@yield('title') Registrar Persona</title>


@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
            <div class="p-3" style="background: rgb(255, 253, 253); margin-top: 20vh; border-radius: 20px;">
                    
                    <center>
                        <h3 class="mb-4" style="color: black;">Crear Persona</h3>
                    </center>
                    
                    <form method="post" action="{{ url('/persona') }}" enctype="multipart/form-data" onsubmit="return modelo(this)">
                        @csrf
                        <div class="row">

                            <div class="col-3">
                                <label style="color: black;">Nombre de la Persona</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{  isset($persona->nombre)?$persona->nombre:'' }}" onkeypress="return soloLetras(event);" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label style="color: black;">Apellido de la Persona</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" value="{{ isset($persona->apellido)?$persona->apellido:'' }}" onkeypress="return soloLetras(event);" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label style="color: black;">Cédula de la Persona</label>
                                <input type="text" class="form-control" name="cedula" id="cedula" value="{{ isset($persona->cedula)?$persona->cedula:'' }}" onkeypress="return solonum(event);" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label style="color: black;">Id.Usuario de la Persona</label>
                                <input type="text" class="form-control" name="id_usuario" id="id_usuario" value="{{ isset($persona->id_usuario)?$persona->id_usuario:'' }}" onkeypress="return sinespacios(event);" style="background: white;">
                            </div>
                            <div class="col-3">
                                <label for="cargo" style="color: black;">Cargo de la Persona</label>
                                <select class="form-select" id="cargo" name="id_cargo">
                                    <option value="0">Seleccione un cargo</option>
                                    @foreach($cargos as $cargo)
                                        <option value="{{ $cargo->id }}">{{ $cargo->nombre_cargo }}</option>
                                    @endforeach
                                </select>                            
                            </div>
                            <div class="col-3">
                                <label style="color: black;">Teléfono de la Persona</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" value="{{ isset($persona->telefono)?$persona->telefono:'' }}" onkeypress="return solonum(event);" style="background: white;">
                            </div>

                        </div>

                        <br>
                        <center>
                        
                        <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                        <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('persona/') }}"> Regresar </a>
                        </center>
                        
                    </form>
                </div>
            </div> 
        </div>
    </div>

@endsection