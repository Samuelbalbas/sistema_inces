@extends('layouts.index')

<title>@yield('title') Inicio</title>

@section('content')

<!-- Form Start -->

                    <!-- ? Tabla o formulario con sus respectivos campos -->

          <!-- Recent Sales Start -->
          @include('partials.messages')
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-13">
                        <div class="">
                            <div class="row">

                                {{-- Primera Carta --}}
                                <div class="card mb-3" style="width: 20% ; left: 5%; margin-top: 1% ;">
                                    <div class="card-body">
                                        <img src="img/descarga.jpg" class="card-img-top" alt="" height=" 80%; ">
                                        <center>
                                            <h3 class="card-title" style="color: black; margin-top: 10%;">Misión</h3>
                                        </center>
                                    </div>
                                    <p class="card-text" align="justify" style="color: black ;">"El Inces es la institución del Estado encargada de la formación y autoformación 
                                        colectiva, integral, continua y permanente de los trabajadores y las trabajadoras, orientada al desarrollo de sus capacidades para la producción de bienes
                                        y prestación de servicios que satisfagan las necesidades del Poder Popular".
                                    </p>
                                </div>

                                {{-- Segunda Carta --}}
                                <div class="card mb-3" style="width: 20% ; left: 8%; margin-top: 1% ;">
                                    <div class="card-body">
                                        <center>
                                            <h3 class="card-title" style="color: black;">Visión</h3>
                                        </center>
                                        <p class="card-text" align="justify" style="color: black ;">"Convertirnos en una poderosa herramienta para la transformación y consolidación
                                            de una economía soberana y diversificada, siendo referente nacional e internacional de la formación técnica profesional inclusiva
                                             y colectiva, con altos niveles de calidad".
                                        </p>
                                        <img src="img/banner_comunidad_inces.png" class="card-img-top" alt="" style="height: 37% ;">
                                    </div>
                                </div>

                                {{-- Tercera Carta --}}
                                <div class="card mb-3" style="width: 20% ; left: 11%; margin-top: 1% ;">
                                    <div class="card-body">
                                        <img src="img/historia.jpg" class="card-img-top" alt="" height=" 60%; ">
                                        <center>
                                            <h3 class="card-title" style="color: black; margin-top: 10%;">Reseña Histórica</h3>
                                        </center>
                                    </div>
                                    <p class="card-text" align="justify" style="color: black ;">"El 22 de agosto de 1959 se abrió un capitulo en la vida del pueblo venezolano,
                                        cuando se creó el Instituto Nacional de Cooperación Educativa (Ince), 
                                        el proyecto de Ley de Creación del instituto estuvo a cargo del maestro Luis Beltrán Prieto Figueroa".
                                    </p>
                                </div>
                                
                                {{-- Cuarta Carta --}}
                                <div class="card mb-3" style="width: 20% ; left: 14%; margin-top: 1% ;">
                                    <div class="card-body">
                                        <center>
                                            <h3 class="card-title" style="color: black;">Valores</h3>
                                        </center>
                                        <p class="card-text" align="justify" style="color: black ;">"El bien común, la prosperidad y el bienestar del pueblo.
                                            La solidaridad, la convivencia y la integridad del nuevo ciudadano y ciudadana republicanos. Planificación, organización, ejecución, control 
                                            y evaluación para garantizar el cumplimiento cabal de los planes, programas y proyectos".
                                        </p>
                                        <img src="img/valores.jpg" class="card-img-top" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
          <!-- Recent Sales End -->
                                                
<!-- Form End -->

@endsection