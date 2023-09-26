<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




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

        return view("home.inicio", compact('count_persona','count_tipo_periferico', 'count_periferico', 'count_sistema', 'count_equipo',
            'count_asignar', 'count_resicorporar', 'count_desincorporar' ) , [
            'count' => $count_persona, $count_tipo_periferico, $count_periferico, $count_sistema, $count_equipo, $count_asignar, 
                $count_resicorporar, $count_desincorporar,
          ]);

    }

}