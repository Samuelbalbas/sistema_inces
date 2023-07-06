@extends('layouts.index')

<title>@yield('title') Registrar Sistemas Operativos</title>


@section('content')

            <div class="container-fluid" style="margin-top: 13%">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-13">
                        <div class="p-3" style="background: rgb(255, 253, 253); border-radius: 20px;">
                            <center>
                                <h3 class="mb-4" style="color: black;">Registrar un Nuevo Sistemas Operativos en los Equipos</h3>
                            </center>
                            
                            <form method="post" action="{{ url('/sistema') }}" enctype="multipart/form-data" onsubmit="return sistemas_operatvos(this)">
                                 @csrf

                                <div class="row">

                                    <div class="form-check col-2">
                                        <label class="form-check-label" style="color: black; margin-top: 2.5px ; margin-left: 6%;" for="softpriv">Software Privativo</label>
                                        <input class="form-check-input" style="border-color: black; margin-left: 34%; margin-top: 10px;" type="radio" name="tipo" id="softpriv" value="Privativo">
                                    </div>

                                    <div class="form-check col-2">
                                        <label class="form-check-label" style="color: black; margin-left: 14% ; margin-top: 2.5px ;" for="softlibr">Software Libre</label>
                                        <input class="form-check-input" style="border-color: black; margin-left: 36%; margin-top: 10px;" type="radio" name="tipo" id="softlibr" value="Libre">
                                    </div>
    
                                    <div class="col-3">
                                        <label style="color: black;">Nombre del Sistema Operativo (S.O)</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Sistema Operativo" id="nombre" name="nombre" style="background: white;" maxLength="15" value="{{ isset($sistema->nombre)?$sistema->nombre:'' }}" onkeypress="return sinespacios(event);">
                                    </div>

                                    <div class="col-3">
                                        <label style="color: black;">Versión del Sistema Operativo (S.O)</label>
                                        <input type="text" class="form-control" placeholder="Ingrese la Versión del (S.O)" id="version" name="version" style="background: white;" maxLength="15" value="{{ isset($sistema->version)?$sistema->version:'' }}">
                                    </div>
                                </div>

                                <br>
                                <center>
                        
                                <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                                <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('sistema/') }}"> Regresar </a>
                                </center>
                                        
                            </form>
                        </div>
                    </div> 
                </div>
            </div>

@endsection