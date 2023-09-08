@extends('layouts.index')

<title>@yield('title') Registrar Roles</title>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>

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
                        <h3 class="mb-4" style="color: black;">Crear Rol</h3>
                    </center>
                    
                    <form method="post" action="{{ route('roles.store') }}" enctype="multipart/form-data" onsubmit="return roles(this)">
                            @csrf

                        <div class="row">

                            <div class="col-3">
                                <label style="color: black;">Nombre del Rol</label>
                                <input type="text" class="form-control" id="name" name="name" style="background: white;"  value="" onkeypress="return soloLetras(event);">
                            </div>

                            <br><br><br><br>

                            <div class="form-group d-flex flex-wrap">
                            
                                
                                <br/>
                                <div class="form-check mr-3">
                                     <input type="checkbox" id="select-all-permissions" class="form-check-input">
                                     <label class="form-check-label" for="select-all-permissions">Seleccionar todo</label>
                                </div>
                                @foreach($permission as $value)
                                <div class="form-check mr-3">
                                    <label class="form-check-label">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input')) }}
                                    {{ $value->name }}</label>
                                    </div>
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
                    <script>
                        function select-all-permissions(source) {
                        checkboxes = document.getElementsByTagName('permission[]');
                        for(var i=0, n=checkboxes.length;i<n;i++) {
                            if(checkboxes[i].type == 'checkbox') {
                            checkboxes[i].checked = source.checked;
                            }
                        }
                    }
                    </script>

                </div>
            </div> 
        </div>
    </div>


@endsection