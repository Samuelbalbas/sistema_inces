@extends('layouts.index')

<title>@yield('title') Editar Periférico</title>


@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
            <div class="p-3" style="background: rgb(255, 253, 253); margin-top: 20vh; border-radius: 20px;">
                    
                    <center>
                        <h3 class="mb-4" style="color: black;">Editar Periférico</h3>
                    </center>
                    
                    <form method="post" action="{{ url('/periferico/'.$periferico->id )}}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH')}}
                        <div class="row">

                            <div class="col-3">
                                <label style="color: black;">Nombre del Periférico</label>
                                <input type="text" class="form-control" name="periferic" id="periferic" value="{{  isset($periferico->periferic)?$periferico->periferic:'' }}" onkeypress="return soloLetras(event);" style="background: white;">
                            </div>

                            <div class="col-3">
                                <label for="marca" style="color: black;">Marca del Periférico</label>
                                <select class="form-select" id="marca" name="id_marca">
                                    <option value="0">Seleccione una Marca</option>
                                    @foreach($marcas as $marca)
                                        <option value="{{ $marca->id }}"{{ $marca->id == $periferico->id_marca ? 'selected' : '' }}>{{ $marca->nombre_marca }}</option>
                                    @endforeach
                                </select>                            
                            </div>

                            <div class="col-3">
                                <label for="modelo" style="color: black;">Modelo del Periférico</label>
                                <select class="form-select" id="modelo" name="id_modelo">
                                    <option value="0">Seleccione un Modelo</option>
                                    @foreach($modelos as $modelo)
                                        <option value="{{ $modelo->id }}"{{ $modelo->id == $periferico->id_modelo ? 'selected' : '' }}>{{ $modelo->nombre_modelo }}</option>
                                    @endforeach
                                </select>                            
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Serial</label>
                                <input type="text" class="form-control" name="serial" id="serial" value="{{ isset($periferico->serial)?$periferico->serial:'' }}" onkeypress="return sinespacios(event);" style="background: white;">
                            </div>
                            
                            <div class="col-3">
                                <label style="color: black;">Serial Activo</label>
                                <input type="text" class="form-control" name="serialA" id="serialA" value="{{ isset($periferico->serialA)?$periferico->serialA:'' }}" onkeypress="return solonum(event);" style="background: white;">
                            </div>

                        </div>

                        <br>
                        <center>
                        
                        <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                        <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('periferico/') }}"> Regresar </a>
                        </center>
                        
                    </form>
                </div>
            </div> 
        </div>
    </div>

@endsection