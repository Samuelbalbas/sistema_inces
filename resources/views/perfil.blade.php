@extends('layouts.index')

<title>@yield('title') Perfil</title>

@section('content')

<!-- Form Start -->

                    <!-- ? Tabla o formulario con sus respectivos campos -->

    @include('partials.messages')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-13">
            <div class="p-3" style="background: rgb(255, 255, 255);  margin-top: 30vh;">
                <center>
                    <h6 class="mb-4" style="color: black;">Gestión Perfil</h6>
                </center>
                            
                <form method="POST" action="{{route('changePassword')}}">
                                    
                    @csrf
                                    
                    <div class="row">

                        <div class="col-3">
                            <label style="color: black;">Usuario</label>
                            <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" onkeypress="" style="background: white;">
                        </div>
            
                        <div class="col-3">
                            <label style="color: black;">Contraseña Actual</label>
                            <input type="password" class="form-control" name="password_actual"  onkeypress="" style="background: white;">
                        </div>
            
                        <div class="col-3">
                            <label style="color: black;">Nueva Contraseña</label>
                            <input type="password" class="form-control" name="password" onkeypress="" style="background: white;">
                        </div>
            
                        <div class="col-3">
                            <label style="color: black;">Confirme Nueva Contraseña</label>
                            <input type="password" class="form-control" name="confirm_password" onkeypress="" style="background: white;">
                        </div>

                    </div>

                    <br>
                    <center>
                                        
                    <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                    <a href="/home" class="btn btn-primary" style="width: 10%; color: black; background: white;">Cancelar</a>

                    </center>
                                    
                </form>
            </div>
        </div> 
    </div>
</div>
                                                
<!-- Form End -->

@endsection