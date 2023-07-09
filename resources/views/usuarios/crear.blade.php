@extends('layouts.index')

<title>@yield('title') Registrar Usuarios</title>

@section('content')

    @if ($errors->any())                                                
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>¡Revise los campos!</strong>                        
            @foreach ($errors->all() as $error)                                    
                <span class="badge badge-danger">{{ $error }}</span>
            @endforeach                        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif

    <div class="container-fluid" style="margin-top: 18%">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
                <div class="p-3" style="background: rgb(255, 253, 253); border-radius: 20px;">
                    <center>
                        <h3 class="mb-4" style="color: black;">Crear Usuario</h3>
                    </center>
                    
                    <form method="post" action="{{ route('usuarios.store') }}" enctype="multipart/form-data" onsubmit="return usuario(this)">
                            @csrf

                        <div class="row">

                            <div class="col-3">
                                <label style="color: black;">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" style="background: white;" value="" placeholder="Ingrese el Nombre" autocomplete="off" onkeypress="return soloLetras(event);">
                            </div>

                            <div class="col-3">
                                <label style="color: black;">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" style="background: white;" value="" placeholder="Ingrese el E-mail" autocomplete="off">
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" style="background: white;" value="" placeholder="Ingrese El Usuario" autocomplete="off">
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" style="background: white;" value="" placeholder="Ingrese la Contrseña" autocomplete="off">
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" style="background: white;" value="" placeholder="Confirme La Contraseña" autocomplete="off">
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Roles</label>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-select')) !!}
                            </div>
                        </div>

                        <br>
                        <center>
                
                        <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                        <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('usuarios/') }}"> Regresar </a>
                        </center>
                                
                    </form>
                </div>
            </div> 
        </div>
    </div>

@endsection