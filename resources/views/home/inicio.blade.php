@extends('layouts.index')

<title>@yield('title') Inicio</title>

@section('content')

           @include('partials.messages')
           <br><br>
                <div class="container-fluid pt-1 px-4">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2">
                            <div class="p-3" style="background-color: white;border-radius: 30px;">
                            <h4 class="mb-4" style="color: black;">{{ ($count_sede) }} Sede</h4><i class="fa fa-university fa-3x" style="color: red;"></i>
                                <h4 class="mb-4" style="color: black; font-size: 30px;"></h4>
                                <div class="ms-1">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                                <i class="fa fa-building fa-3x"  style="color: white;"></i>
                                <h4 class="mb-0" style="color: white">División</h4>
                                <div class="ms-3">
                                    <h4 class="mb-4" style="color: white">{{ ($count_division) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                                <i class="fa fa-briefcase fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white"> Cargo</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white">{{ ($count_cargo) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                                <i class="fa fa-users fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Persona </h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;"> {{ ($count_persona) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                                <i class="fa fa-star fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Marca </h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white">{{ ($count_marca) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                        <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                            <i class="fa fa-tags fa-3x" style="color: white;"></i>
                            <h4 class="mb-0" style="color: white;">Modelo</h4>
                            <div class="ms-3">
                                <h4 class="mb-0" style="color: white;">{{ ($count_modelo) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="container-fluid pt-1 px-0">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                                <i class="fa fa-cogs fa-3x" style="color: white;"></i>
                                <h4 class="mb-0"sytle="color: white;">Tipo Periferico</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;">{{ ($count_tipo_periferico) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                                <i class="fa fa-cog fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Periferico</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;">{{ ($count_periferico) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                                <i class="fa fa-code fa-2x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Sistemas Operativos</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;">{{ ($count_sistema) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50% 61.28%, #9f90f4 0, #6c6cd8 50%, #284bbd 100%);">
                                <i class="fa fa-desktop fa-2x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Equipos Incorporados</h4>
                                <h4 class="mb-0" style="color: white;">{{ ($count_equipo) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="container-fluid pt-1 px-0">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2">
                            <div class=" rounded d-flex align-items-center justify-content-between p-1" style="background: rgb(255, 253, 253);border: 3px solid black;">
                                <i class="fa fa-share fa-3x text-dark"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Equpios Asignados</p>
                                    <h4 class="mb-0" style="color: black">{{ ( $count_asignar) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-1" style="background: rgb(255, 253, 253);border: 3px solid black;">
                                <i class="fa fa-random fa-2x text-dark"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Equipos Reincorporados</p>
                                    <h4 class="mb-0" style="color: black">{{ ($count_resicorporar) }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="container-fluid pt-1 px-0">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-1" style="background: rgb(255, 253, 253);border: 3px solid black;">
                                <i class="fa fa-reply fa-2x text-dark"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Equipos Desincorporados</p>
                                    <h4 class="mb-0" style="color: black">{{ ( $count_desincorporar) }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
            {{-- Catalogo para la Estadistíca  --}}
                 <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <div id="container"></div>
                        </div>
                    </div>
                </div>

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

@endsection

@section('js-highcharts')
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: 'Browser market shares. January, 2022'
            },
            subtitle: {
                align: 'left',
                text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Total percent market share'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [
                {
                    name: 'Browsers',
                    colorByPoint: true,
                    data: 
                }

                ],
        
        });

    </script>
@endsection
