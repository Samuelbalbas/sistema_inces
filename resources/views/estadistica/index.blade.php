@extends('layouts.index')

<title>@yield('title') Estadistíca</title>

@section('content')

<div class="p-4">
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-2">
        <div class="col">
            <div class="card border-dark mb-3">
              <div class="card-header fw-bold text-center">Equipos Asignados</div>
              <div class="card-body text-dark">
                <div class="display-1 text-center">
                    {{$assignedCount ?? null}}
                </div>
                <div class="fw-bold small text-center">
                    De un total: {{ ($equipos) ? $equipos->count() : null }}
                </div>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-dark mb-3">
              <div class="card-header fw-bold text-center">Equipos desincorporados</div>
              <div class="card-body text-dark">
                <div class="display-1 text-center">
                    {{$desincorporadoCount ?? null}}
                </div>
                <div class="fw-bold small text-center">
                    De un total: {{ ($equipos) ? $equipos->count() : null }}
                </div>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-dark mb-3">
              <div class="card-header fw-bold text-center">Equipos sin asignación</div>
              <div class="card-body text-dark">
                <div class="display-1 text-center">
                    {{$noAssignedCount ?? null}}
                </div>
                <div class="fw-bold small text-center">
                    De un total: {{ ($equipos) ? $equipos->count() : null }}
                </div>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-dark mb-3">
              <div class="card-header fw-bold text-center">División con mas equipos</div>
              <div class="card-body text-dark">
                <div class="display-1 text-center">
                    {{ ($division) ? $division->equipos_asignados : null }}
                </div>
                <div class="fw-bold small text-center">
                    {{ ($division) ? $division->nombre_division : null }}
                </div>
              </div>
            </div>
        </div>

        <div class="col">
            <div class="card border-dark mb-3">
              <div class="card-header fw-bold text-center">Sede con mas equipos</div>
              <div class="card-body text-dark">
                <div class="display-1 text-center">
                    {{ ($sede) ? $sede->equipos_asignados : null }}
                </div>
                <div class="fw-bold small text-center">
                    {{ ($sede) ? $sede->nombre_sede : null }}
                </div>
              </div>
            </div>
        </div>

    </div>
</div>
    
@endsection

    