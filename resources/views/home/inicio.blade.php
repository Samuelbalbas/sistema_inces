@extends('layouts.index')

<title>@yield('title') Inicio</title>

@section('content')

           @include('partials.messages')
           <br><br>
                <div class="container-fluid pt-1 px-4" style="margin-top: 9%">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-university fa-3x" style="color: red;"></i>
                                <h4 class="mb-0" style="color: black;">Sede</h4>
                                <div class="ms-3">    
                                    <h4 class="mb-0" style="color: black;">{{ ($count_sede) }}</h4>
                                </div>    
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-building fa-3x"  style="color: red;"></i>
                                <h4 class="mb-0" style="color: black">División</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: black">{{ ($count_division) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-briefcase fa-3x" style="color: red;"></i>
                                <h4 class="mb-0" style="color: black"> Cargo</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: black">{{ ($count_cargo) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-users fa-3x" style="color: red;"></i>
                                <h4 class="mb-0" style="color: black;">Persona </h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: black;"> {{ ($count_persona) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-star fa-3x" style="color: red;"></i>
                                <h4 class="mb-0" style="color: black;">Marca </h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: black">{{ ($count_marca) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                        <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                            <i class="fa fa-tags fa-3x" style="color: red;"></i>
                            <h4 class="mb-0" style="color: black;">Modelo</h4>
                            <div class="ms-3">
                                <h4 class="mb-0" style="color: black;">{{ ($count_modelo) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="container-fluid pt-1 px-0">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-cogs fa-3x" style="color: red;"></i>
                                <h4 class="mb-0" style="color: black;">Tipo Periferico</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: black;">{{ ($count_tipo_periferico) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-cog fa-3x" style="color: red;"></i>
                                <h4 class="mb-0" style="color: black;">Periferico</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: black;">{{ ($count_periferico) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-code fa-2x" style="color: red;"></i>
                                <h4 class="mb-0" style="color: black;">Sistemas Operativos</h4>
                                <div class="ms-3">
                                    <h4 class="mb-0" style="color: black;">{{ ($count_sistema) }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-desktop fa-2x" style="color: red;"></i>
                                <h4 class="mb-0" style="color: black;">Equipos Incorporados</h4>
                                <h4 class="mb-0" style="color: black;">{{ ($count_equipo) }}</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-share fa-2x" style="color: red;"></i>
                                    <h4 class="mb-0" style="color: black;">Equipos Asignados</h4>
                                    <h4 class="mb-0" style="color: black;">{{ ( $count_asignar) }}</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-random fa-2x" style="color: red;"></i>
                                    <h5 class="mb-0"style="color: black;">Equipos Reincorporados</h5>
                                    <h4 class="mb-0" style="color: black;">{{ ($count_resicorporar) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="container-fluid pt-1 px-0">
                    <div class="row">
                        <div class="col-sm-6 col-xl-2">
                            <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-image:radial-gradient(circle at 49.74% 49.85%, #ffffff 0, #ffffff 12.5%, #ffffff 25%, #feffff 37.5%, #fcfcfc 50%, #faf3f5 62.5%, #f7eaef 75%, #f3e3eb 87.5%, #efdce8 100%);">
                                <i class="fa fa-reply fa-2x" style="color: red;"></i>
                                <h5 class="mb-3" style="color: black; ">Equipos Desincorporados</h5>
                                <h4 class="mb-" style="color: black;">{{ ( $count_desincorporar) }}</h4>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

