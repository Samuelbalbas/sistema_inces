@extends('layouts.index')

<title>@yield('title') Registrar Periférico</title>

<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>

<script>
$(document).ready(function() {
  $('#guardarMarca').click(function(event) { // al hacer clic en el botón con id 'guardarMarca'
    event.preventDefault(); // prevenimos el comportamiento por defecto del botón
    $.ajax({
      url: '/marca/saveModal', // la url que se va a ejecutar la acción del controlador
      type: 'POST', // el método HTTP utilizado
      data: $('#marcaForm').serialize(), // los datos que se van a enviar al servidor
      success: function(response){ // si la petición es exitosa
        $('#marca').append($('<option>', { // agrega una opción al select con id 'marca'
          value: response.marca.id, // asigna el valor de la propiedad id del objeto de respuesta al atributo 'value'
          text: response.marca.nombre_marca // asigna el valor de la propiedad nombre_marca del objeto de respuesta al contenido de la opción
        })).trigger('change'); // opcional si usas algún plugin de select
        $('#staticBackdrop').modal('hide'); // oculta el modal con id 'staticBackdrop'
        $('#marcaForm')[0].reset(); // reinicia el formulario con id 'marcaForm'
        alert("Creado Exitosamnete.") // muestra una alerta con un mensaje de éxito
      },
      error: function(error){ // si hay un error en la petición
        console.log('Error al guardar la marca:', error); // muestra un mensaje en la consola del navegador
        alert("Error al guardar la marca"); // muestra una alerta con un mensaje de error
      }
    });
  });
});
</script>

<script>
$(document).ready(function() {
  $('#guardarModelo').click(function(event) { // al hacer clic en el botón con id 'guardarModelo'
    event.preventDefault(); // prevenimos el comportamiento por defecto del botón
    $.ajax({
      url: '/modelo/saveModal', // la url que se va a ejecutar la acción del controlador
      type: 'POST', // el método HTTP utilizado
      data: $('#modeloForm').serialize(), // los datos que se van a enviar al servidor
      success: function(response){ // si la petición es exitosa
        $('#modelo').append($('<option>', { // agrega una opción al select con id 'modelo'
          value: response.modelo.id, // asigna el valor de la propiedad id del objeto de respuesta al atributo 'value'
          text: response.modelo.nombre_modelo // asigna el valor de la propiedad nombre_modelo del objeto de respuesta al contenido de la opción
        })).trigger('change'); // opcional si usas algún plugin de select
        $('#staticBackdropModelo').modal('hide'); // oculta el modal con id 'staticBackdrop'
        $('#modeloForm')[0].reset(); // reinicia el formulario con id 'modeloForm'
        alert("Creado Exitosamnete.") // muestra una alerta con un mensaje de éxito
      },
      error: function(error){ // si hay un error en la petición
        console.log('Error al guardar la modelo:', error); // muestra un mensaje en la consola del navegador
        alert("Error al guardar la modelo"); // muestra una alerta con un mensaje de error
      }
    });
  });
});

</script>

@section('content')

    <div class="container-fluid" style="margin-top: 18%">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-13">
            <div class="p-3" style="background: rgb(255, 253, 253); border-radius: 20px;">
                    
                    <center>
                        <h3 class="mb-4" style="color: black;">Crear Periférico</h3>
                    </center>
                    
                    <form method="post" action="{{ url('/periferico') }}" enctype="multipart/form-data" onsubmit="return modelo(this)">
                        @csrf
                        <div class="row">

                            <div class="col-3">
                                <label for="tipo" style="color: black;">Tipo del Periférico</label>
                                <select class="form-select" id="id_tipo" name="id_tipo">
                                    <option value="0">Seleccione un Tipo</option>
                                    @foreach($tipo_perifericos as $tipo_periferico)
                                        <option value="{{ $tipo_periferico->id }}">{{ $tipo_periferico->tipo }}</option>
                                    @endforeach
                                </select>                            
                            </div>

                            <div class="col-3">
                                <label for="marca" style="color: black;">Marca del Periférico</label>
                                <select class="form-select" id="marca" name="id_marca">
                                    <option value="0">Seleccione una Marca</option>
                                    @foreach($marcas as $marca)
                                        <option value="{{ $marca->id }}">{{ $marca->nombre_marca }}</option>
                                    @endforeach
                                </select>                            
                            </div>
                            
                            <button type="button" class="btn btn-light" style="margin-top: 2%; height: 5vh; width: 6%; color: white;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-square"></i></button>

                            <div class="col-3">
                                <label for="modelo" style="color: black;">Modelo del Periférico</label>
                                <select class="form-select" id="modelo" name="id_modelo">
                                    <option value="0">Seleccione un Modelo</option>
                                    @foreach($modelos as $modelo)
                                        <option value="{{ $modelo->id }}">{{ $modelo->nombre_modelo }}</option>
                                    @endforeach
                                </select>                            
                            </div>

                            <button type="button" class="btn btn-light" style="margin-top: 2%; height: 5vh; width: 6%; color: white;" data-bs-toggle="modal" data-bs-target="#staticBackdropModelo"><i class="bi bi-plus-square"></i></button>

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

        <!-- Modal Marca  -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="marcaForm" method="POST" action="{{ route('marca.saveModal') }}">
                        @csrf   
                        <div class="modal-header">
                        <h3 class="modal-title" id="staticBackdropLabel" style="color: black;">Nuevo Registro de la Marca</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-5">
                                <label style="color: black;">Nueva Marca</label>
                                <input type="text" class="form-control" id="nombre_marca" name="nombre_marca" onkeypress="return sinespacios(event);" style="background: white;">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="guardarMarca" class="btn btn-lg btn-success"><i class="bi bi-check2-square"></i></button>
                            <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Modelo  -->
        <div class="modal fade" id="staticBackdropModelo" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="modeloForm" method="POST" action="{{ route('modelo.saveModal') }}">
                    @csrf  
                        <div class="modal-header">
                            <h3 class="modal-title" id="staticBackdropModeloLabel" style="color: black;">Nuevo Registro del Modelo</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-4">
                            <label style="color: black;">Nuevo Modelo</label>
                            <input type="text" class="form-control" id="nombre_modelo" name="nombre_modelo" onkeypress="return sinespacios(event);" style="background: white;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="guardarModelo" class="btn btn-lg btn-success"><i class="bi bi-check2-square"></i></button>
                            <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection