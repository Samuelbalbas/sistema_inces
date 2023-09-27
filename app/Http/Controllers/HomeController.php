<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sede;
use App\Models\Division;
use App\Models\Cargo;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Persona;
use App\Models\TipoPeriferico;
use App\Models\Perifericos;
use App\Models\Sistema;
use App\Models\Equipos;
use App\Models\Asignar;

class homeController extends Controller
{
    //
    public function index(){

        $sedes = Sede::all();
        $count_sede = DB::table('sedes')
        ->count();

        $divisions = Division::all();
        $count_division = DB::table('divisions')
        ->count();

        $cargos = Cargo::all();
        $count_cargo = DB::table('cargos')
        ->count();

        $marcas = Marca::all();
        $count_marca = DB::table('marcas')
        ->count();

        $modelos = Modelo::all();
        $count_modelo = DB::table('modelos')
        ->count();

        $personas = Persona::all();
        $count_persona = DB::table('personas')
        ->count();

        $tipo_perifericos=TipoPeriferico::all();
        $count_tipo_periferico = DB::table('tipo_perifericos')
        ->count();

        $perifericos= Perifericos::all();
        $count_periferico = DB::table('perifericos')
        ->count();

        $sistemas=sistema::all();
        $count_sistema = DB::table('perifericos')
        ->count();

        $equipos=Equipos::all();
        $count_equipo = DB::table('equipos')
        ->count();

        $asignaciones = Asignar::with('persona', 'equipo', 'periferico')->get();
        $count_asignar = DB::table('asignar')
        ->count();

        $asignaciones = Asignar::with('persona', 'equipo', 'periferico')->get();
        $count_desincorporar = DB::table('asignar')
        ->count();

        $asignaciones = Asignar::with('persona', 'equipo', 'periferico')->get();
        $count_resicorporar = DB::table('asignar')
        ->count();

        return view("home.inicio", compact('count_sede', 'count_division','count_cargo','count_marca','count_modelo','count_persona','count_tipo_periferico', 'count_periferico', 'count_sistema', 'count_equipo',
            'count_asignar', 'count_resicorporar', 'count_desincorporar' ) , [
            'count' => $count_sede, $count_division, $count_cargo, $count_marca, $count_modelo, $count_persona, $count_tipo_periferico, $count_periferico, $count_sistema, $count_equipo, $count_asignar, 
                $count_resicorporar, $count_desincorporar,
          ]);

    }

}