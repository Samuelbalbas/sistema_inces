@extends('layouts.index')

<title>@yield('title') Editar Usuarios</title>

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

    <div class="container-fluid" style="margin-top: 11%">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
                <div class="p-3" style="background: rgb(255, 253, 253); border-radius: 20px;">
                    <center>
                        <h3 class="mb-4" style="color: black;">Ediar Usuario</h3>
                    </center>
                    
                    {{-- {!! Form::model($user, ['method' => 'PATCH','route' => ['usuarios.update', $user->id], 'onsubmit' => 'return usuario(this)']) !!} --}}
                    {!! Form::model($user, ['method' => 'PATCH','route' => ['usuarios.update', $user->id]]) !!}

                        <div class="row">

                            <div class="col-3">
                                <label style="color: black;">Nombre</label>
                                {!! Form::text('name', null, array('class' => 'form-control', 'onkeypress' => 'return soloLetras(event);')) !!}
                            </div>

                            <div class="col-3">
                                <label style="color: black;">E-mail</label>
                                {!! Form::text('email', null, array('class' => 'form-control')) !!}
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Nombre de Usuario</label>
                                {!! Form::text('username', null, array('class' => 'form-control')) !!}
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Contraseña</label>
                                {!! Form::password('password', array('class' => 'form-control')) !!}
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Confirmar Contraseña</label>
                                {!! Form::password('confirm-password', array('class' => 'form-control')) !!}
                            </div>

                            <div class="col-3">
                                <label style="color: black;">Roles</label>
                                {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-select')) !!}
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