@extends('layouts.index')

<title>@yield('title') Editar Tipo de Periérico</title>


@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
                <div class="p-3" style="background: rgb(255, 253, 253); margin-top: 20vh; border-radius: 20px;">
                    
                    <center>
                        <h3 class="mb-4" style="color: black;">Editar Tipo de Periérico</h3>
                    </center>
                    
                    <form method="post" action="{{ url('/tipoperif/'.$tipo_periferico->id )}}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH')}}
                        <div class="row">

                            <div class="col-3">
                                <label style="color: black;">Nombre del Tipo de Periérico</label>
                                <input type="text" class="form-control" name="tipo" id="tipo" value="{{ isset($tipo_periferico->tipo)?$tipo_periferico->tipo:'' }}" style="background: white;">
                            </div>

                        </div>

                        <br>
                        <center>
                        
                        <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                        <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('tipoperif/') }}"> Regresar </a>
                        </center>
                        
                    </form>
                </div>
            </div> 
        </div>
    </div>

@endsection