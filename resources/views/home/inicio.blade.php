@extends('layouts.index')

<title>@yield('title') Inicio</title>

@section('content')

           @include('partials.messages')
           <br><br>
                <div class="container-fluid pt-1 px-4">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                            <i class="fa fa-university fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white; font-size: 30px;">Sede</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;">{{ ($count_sede) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-building fa-3x"  style="color: white;"></i>
                                <h4 class="mb-0" style="color: white">División</h4>
                                <div class="ms-3">
                                    <h4 class="mb-4" style="color: white">{{ ($count_division) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-briefcase fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white"> Cargo</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white">{{ ($count_cargo) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-users fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Persona </h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;"> {{ ($count_persona) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-star fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Marca </h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white">{{ ($count_marca) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                        <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
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
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-cogs fa-3x" style="color: white;"></i>
                                <h4 class="mb-0"sytle="color: white;">Tipo Periferico</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;">{{ ($count_tipo_periferico) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-cog fa-3x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Periferico</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;">{{ ($count_periferico) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-code fa-2x" style="color: white;"></i>
                                <h4 class="mb-0" style="color: white;">Sistemas Operativos</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: white;">{{ ($count_sistema) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
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
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-share fa-2x" style="color: white;"></i>
                                    <h4 class="mb-0" style="color: white;">Equipos Asignados</h4>
                                    <h4 class="mb-0" style="color: white;">{{ ( $count_asignar) }}</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-random fa-2x" style="color: white;"></i>
                                    <h5 class="mb-0"style="color: white;">Equipos Reincorporados</h5>
                                    <h4 class="mb-0" style="color: white;">{{ ($count_resicorporar) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="container-fluid pt-1 px-0">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2 focus-highlight">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image: radial-gradient(circle at 50.67% 50%, #323636 0, #313131 25%, #302c2c 50%, #2f2727 75%, #2d2223 100%);">
                                <i class="fa fa-reply fa-2x" style="color: white;"></i>
                                <h4 class="mb-3" style="color: white;">Equipos Desincorporados</h4>
                                <h4 class="mb-0" style="color: white;">{{ ( $count_desincorporar) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

