@extends('layouts.index')

<title>@yield('title') Inicio</title>

@section('content')

<!-- Form Start -->

                    <!-- ? Tabla o formulario con sus respectivos campos -->

          <!-- Recent Sales Start -->

           @include('partials.messages')
                <div class="container-fluid pt-4 px-4">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background:  rgb(255, 253, 253);">
                                <i class="fa fa-university fa-3x text-dark"></i>
                                <div class="ms-3">
                                    <p class="mb-2">SEDE</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">División</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-area fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Cargo</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Persona</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid pt-4 px-4">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background:  rgb(255, 253, 253);">
                                <i class="fa fa-university fa-3x text-dark"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Marca</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Modelo</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-area fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Tipos de Periférico</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Periférico</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid pt-4 px-4">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background:  rgb(255, 253, 253);">
                                <i class="fa fa-university fa-3x text-dark"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Sistemas Operativos</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Equipos Informáticos</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-area fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Equpios Asignados</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background: rgb(255, 253, 253);">
                                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Equipos Reincorporados</p>
                                    <h6 class="mb-0">$1234</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- Catalogo para la Estadistíca  --}}
                {{-- <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Worldwide Sales</h6>
                                    <a href="">Show All</a>
                                </div>
                                <canvas id="worldwide-sales"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Salse & Revenue</h6>
                                    <a href="">Show All</a>
                                </div>
                                <canvas id="salse-revenue"></canvas>
                            </div>
                        </div>
                    </div>
                </div> --}}

            {{-- <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-13">
                        <div class="">
                            <div class="row"> --}}

                                {{-- Primera Carta --}}
                                {{-- <div class="card mb-3" style="width: 20% ; left: 5%; margin-top: 1% ;">
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
                                </div> --}}

                                {{-- Segunda Carta --}}
                                {{-- <div class="card mb-3" style="width: 20% ; left: 8%; margin-top: 1% ;">
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
                                </div> --}}

                                {{-- Tercera Carta --}}
                                {{-- <div class="card mb-3" style="width: 20% ; left: 11%; margin-top: 1% ;">
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
                                </div> --}}
                                
                                {{-- Cuarta Carta --}}
                                {{-- <div class="card mb-3" style="width: 20% ; left: 14%; margin-top: 1% ;">
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
            </div> --}} 
          <!-- Recent Sales End -->
                                                
<!-- Form End -->

@endsection