@extends('layouts.index')

<title>@yield('title') Registrar Roles</title>

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

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
                <div class="p-3" style="background: rgb(255, 253, 253); margin-top: 20vh; border-radius: 20px;">
                    <center>
                        <h3 class="mb-4" style="color: black;">Crear Rol</h3>
                    </center>
                    
                    <form method="post" action="{{ route('roles.store') }}" enctype="multipart/form-data">
                            @csrf

                        <div class="row">

                            <div class="col-3">
                                <label style="color: black;">Nombre del Rol</label>
                                <input type="text" class="form-control" id="name" name="name" style="background: white;"  value="">
                            </div>

                            <br><br><br><br>

                            <div class="form-group">
                                <label style="color: black;">Permisos para este Rol</label>
                                <br/>
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input')) }}
                                    {{ $value->name }}</label>
                                <br/>
                                @endforeach                            
                            </div>
                            
                        </div>

                        <br>
                        <center>
                
                        <button type="submit" class="btn btn-primary" style="width: 10%; color: black; background: white;">Guardar</button>
                        <a class="btn btn-primary" style="width: 10%; color: black; background: white;" href="{{ url('roles/') }}"> Regresar </a>
                        </center>
                                
                    </form>
                </div>
            </div> 
        </div>
    </div>

@endsection