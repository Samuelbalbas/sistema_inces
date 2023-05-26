@extends('layouts.index')

<title>@yield('title') Registrar Marca</title>


@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
                <div class="p-3" style="background: rgb(255, 253, 253); margin-top: 20vh; border-radius: 20px;">
                    
                    <center>
                        <h3 class="mb-4" style="color: black;">Crear Marca</h3>
                    </center>
                    
                    <form method="post" action="{{ url('/marca') }}" enctype="multipart/form-data" onsubmit="return marca(this)">
                        @csrf
                        <div class="row">

                            <div class="col-3">
                                <label style="color: black;">Nombre del Marca</label>
                                <input type="text" class="form-control" name="nombre_marca" id="nombre_marca" value="{{ isset($marca->nombre_marca)?$marca->nombre_marca:'' }}" onkeypress="return soloLetras(event);" style="background: white;">
                            </div>

                        </div>

                        <br>
                        <center>
                        
                        <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                        <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('marca/') }}"> Regresar </a>
                        </center>
                        
                    </form>
                </div>
            </div> 
        </div>
    </div>

@endsection