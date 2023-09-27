<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;
use App\Models\Persona;
use App\Models\Division;
use App\Models\Sede;
use App\Models\Bitacora;
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
        $personId = (!empty($request->personId)) ? $request->personId : null ;
        $sedeId = (!empty($request->sedeId)) ? $request->sedeId : null ;
        $divisionId = (!empty($request->divisionId)) ? $request->divisionId : null ;
        $estatus = (!empty($request->estatus)) ? $request->estatus : null ;

        $equipos = Equipos::select('equipos.*')->leftjoin('asignar', 'equipos.id', '=', 'asignar.id_equipo');

        $equipos = ($estatus) ? $equipos->where('asignar.estatus',$estatus) : $equipos ;

        $equipos = ($personId) ? $equipos->whereHas('asignars', function ($query) use ($personId) { $query->where('id_persona', $personId); }) : $equipos ;

        if ($sedeId) {
          $equipos = $equipos
             ->join('persona_division_sede', 'asignar.id_persona', '=', 'persona_division_sede.id_persona')
             ->join('division_sede', 'persona_division_sede.id_division_sede', '=', 'division_sede.id')
             ->where('division_sede.id_sede', $sedeId)
             ->whereNotNull('asignar.id_equipo');
        }

        if ($divisionId) {
            $equipos = $equipos
             ->join('persona_division_sede', 'asignar.id_persona', '=', 'persona_division_sede.id_persona')  
             ->join('division_sede', 'persona_division_sede.id_division_sede', '=', 'division_sede.id')
             ->where('division_sede.id_division', $divisionId)
             ->whereNotNull('asignar.id_equipo');
        }

        $equipos = $equipos->get(); //dd($equipos);

        $personas = Persona::all();
        $divisions = Division::all();
        $sedes = Sede::all();

        return view('reporte.index', compact('equipos','divisions','sedes','personas','personId','sedeId','divisionId','estatus'));
    }

    public function reportesPdf(Request $request)
    {
          $equipos=$this->getEquipos($request);
          $pdf=Pdf::loadView('reporte.equipo.pdf', compact('equipos'))->setPaper('a4', 'portrait'); //portrait,landscape
          return $pdf->stream();

    }

    public function getEquipos(Request $request)
    {
        $personId = (!empty($request->personId)) ? $request->personId : null ;
        $sedeId = (!empty($request->sedeId)) ? $request->sedeId : null ;
        $divisionId = (!empty($request->divisionId)) ? $request->divisionId : null ;
        $estatus = (!empty($request->estatus)) ? $request->estatus : null ;

        $equipos = Equipos::select('equipos.*')
            ->leftjoin('asignar', 'equipos.id', '=', 'asignar.id_equipo')
            ->leftjoin('persona_division_sede', 'asignar.id_persona', '=', 'persona_division_sede.id_persona')
            ->leftjoin('division_sede', 'persona_division_sede.id_division_sede', '=', 'division_sede.id');        

        if ($sedeId) {
            $equipos = $equipos
             ->where('persona_division_sede.id_persona', $personId);
        }

        if ($sedeId) {
          $equipos = $equipos
             ->where('division_sede.id_sede', $sedeId)
             ->whereNotNull('persona_division_sede.id_persona')
             ->whereNotNull('division_sede.id')
             ->whereNotNull('asignar.id_equipo');
        }

        if ($divisionId) {
            $equipos = $equipos
             ->where('division_sede.id_division', $divisionId)
             ->whereNotNull('persona_division_sede.id_persona')
             ->whereNotNull('division_sede.id')
             ->whereNotNull('asignar.id_equipo');
        }

        $equipos = ($estatus) ? $equipos->where('asignar.estatus',$estatus) : $equipos ;

        $equipos = $equipos->get();

        return $equipos;
    }

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

