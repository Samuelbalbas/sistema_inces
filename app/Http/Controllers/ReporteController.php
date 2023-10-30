<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;
use App\Models\Persona;
use App\Models\Division;
use App\Models\Sede;
use App\Models\Asignar;
use App\Models\Bitacora;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class ReporteController extends Controller
{
    public function bitacora()
    { 
        $bitacora = Bitacora::all();
        return view('reporte.bitacora', compact('bitacora'));
    }

    public function index(Request $request)
    {
            $persona = Persona::join('persona_division_sede', 'persona_division_sede.id_persona', '=', 'personas.id')
                ->join('division_sede', 'division_sede.id', '=', 'persona_division_sede.id_division_sede')
                ->join('sedes', 'sedes.id', '=', 'division_sede.id_sede')
                ->join('divisions', 'divisions.id', '=', 'division_sede.id_division')
                ->join('asignar', 'asignar.id_persona', '=', 'personas.id')
                ->join('equipos', 'asignar.id_equipo', '=', 'equipos.id')
                ->select([
                    'personas.cedula',
                    'personas.nombre',
                    'personas.apellido',
                    'personas.id_usuario',
                    'divisions.nombre_division',
                    'sedes.nombre_sede',
                    'equipos.serial',
                    'equipos.serialA',
                    'asignar.estatus',
                ]);
    
            $resultados = $persona->get();

        return view('reporte.index', ['resultados' => $resultados]);  
        // $personId = (!empty($request->personId)) ? $request->personId : null ;
        // $sedeId = (!empty($request->sedeId)) ? $request->sedeId : null ;
        // $divisionId = (!empty($request->divisionId)) ? $request->divisionId : null ;
        // $estatus = (!empty($request->estatus)) ? $request->estatus : null ;

        // $equipos = Equipos::select('equipos.*')->leftjoin('asignar', 'equipos.id', '=', 'asignar.id_equipo');

        // $equipos = ($estatus) ? $equipos->where('asignar.estatus',$estatus) : $equipos ;

        // $equipos = ($personId) ? $equipos->whereHas('asignars', function ($query) use ($personId) { $query->where('id_persona', $personId); }) : $equipos ;

        // if ($sedeId) {
        //   $equipos = $equipos
        //      ->join('persona_division_sede', 'asignar.id_persona', '=', 'persona_division_sede.id_persona')
        //      ->join('division_sede', 'persona_division_sede.id_division_sede', '=', 'division_sede.id')
        //      ->where('division_sede.id_sede', $sedeId)
        //      ->whereNotNull('asignar.id_equipo');
        // }

        // if ($divisionId) {
        //     $equipos = $equipos
        //      ->join('persona_division_sede', 'asignar.id_persona', '=', 'persona_division_sede.id_persona')  
        //      ->join('division_sede', 'persona_division_sede.id_division_sede', '=', 'division_sede.id')
        //      ->where('division_sede.id_division', $divisionId)
        //      ->whereNotNull('asignar.id_equipo');
        // }

        // $equipos = $equipos->get(); //dd($equipos);

        // $personas = Persona::all();
        // $divisions = Division::all();
        // $sedes = Sede::all();
  
    }
    // public function indexDivisionEquipo(Request $request)
    // {
    //     $persona = Persona::first();
    //     $division_sede = $persona->division_sede;
        
    //     $resultados = Equipos::where('id_division_sede', $division_sede->id)
    //         ->join('marcas', 'equipos.id_marca', '=', 'marcas.id')
    //         ->join('modelos', 'equipos.id_modelo', '=', 'modelos.id')
    //         ->join('sistemas', 'equipos.id_so', '=', 'sistemas.id')
    //         ->select('division_sede.nombre_division', 'equipos.serial', 'equipos.serialA', 'equipos.disco', 'equipos.cpu', 'equipos.ram', 'equipos.velocidad', 'sistemas.nombre', 'modelos.nombre', 'marcas.nombre')


    // }

    public function reportesPdf(Request $request)
    {
        $resultados = Persona::join('persona_division_sede', 'persona_division_sede.id_persona', '=', 'personas.id')
        ->join('division_sede', 'division_sede.id', '=', 'persona_division_sede.id_division_sede')
        ->join('sedes', 'sedes.id', '=', 'division_sede.id_sede')
        ->join('divisions', 'divisions.id', '=', 'division_sede.id_division')
        ->join('asignar', 'asignar.id_persona', '=', 'personas.id')
        ->join('equipos', 'asignar.id_equipo', '=', 'equipos.id')
        ->get();

        $pdf = Pdf::loadView('reporte.equipo.pdf', compact('resultados'))->setPaper('a4', 'portrait'); //portrait,landscape

        return $pdf->stream();

    }

    // public function getEquipos(Request $request)
    // {
    //     $personId = (!empty($request->personId)) ? $request->personId : null ;
    //     $sedeId = (!empty($request->sedeId)) ? $request->sedeId : null ;
    //     $divisionId = (!empty($request->divisionId)) ? $request->divisionId : null ;
    //     $estatus = (!empty($request->estatus)) ? $request->estatus : null ;

    //     $equipos = Equipos::select('equipos.*')
    //         ->leftjoin('asignar', 'equipos.id', '=', 'asignar.id_equipo')
    //         ->leftjoin('persona_division_sede', 'asignar.id_persona', '=', 'persona_division_sede.id_persona')
    //         ->leftjoin('division_sede', 'persona_division_sede.id_division_sede', '=', 'division_sede.id');        

    //     if ($sedeId) {
    //         $equipos = $equipos
    //          ->where('persona_division_sede.id_persona', $personId);
    //     }

    //     if ($sedeId) {
    //       $equipos = $equipos
    //          ->where('division_sede.id_sede', $sedeId)
    //          ->whereNotNull('persona_division_sede.id_persona')
    //          ->whereNotNull('division_sede.id')
    //          ->whereNotNull('asignar.id_equipo');
    //     }

    //     if ($divisionId) {
    //         $equipos = $equipos
    //          ->where('division_sede.id_division', $divisionId)
    //          ->whereNotNull('persona_division_sede.id_persona')
    //          ->whereNotNull('division_sede.id')
    //          ->whereNotNull('asignar.id_equipo');
    //     }

    //     $equipos = ($estatus) ? $equipos->where('asignar.estatus',$estatus) : $equipos ;

    //     $equipos = $equipos->get();

    //     return $equipos;
    // }

}

/*actua como experto en bases de datos y laravel orm.

tengo las tablas equipos, personas, sedes, divisions, asignar, persona_division_sede,division_sede.

La realcion de equipos a asignar es de uno a muchos con clave foranea id_equipo.
La realcion de personas a asignar es de uno a muchos con clave foranea id_persona.
La realcion de personas a persona_division_sede es de uno a muchos con clave foranea id_persona.
La realcion de division_sede a persona_division_sede es de uno a muchos con clave foranea id_division_sede.
La realcion de sedes a division_sede es de uno a muchos con clave foranea id_sede.
La realcion de divisions a division_sede es de uno a muchos con clave foranea id_division.

necesitp una consulta que me filtre a los equipos de una persona

necesito una consulta que me filtre a los equipos de una sede

*/

