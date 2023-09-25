<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;
use App\Models\Persona;
use App\Models\Division;
use App\Models\Sede;
use Barryvdh\DomPDF\Facade\Pdf;

class ReporteController extends Controller
{
    public function index(Request $request)
    {
    	  $personId = $request->id_persona; //id_persona,id_sede,id_division
        $sedeId = $request->id_sede; //id_persona,id_sede,id_division
        $id_division = $request->id_division; //id_persona,id_sede,id_division

        $equipos = Equipos::select('equipos.*');

        $equipos = ($personId) ? $equipos->whereHas('asignars', function ($query) use ($personId) { $query->where('id_persona', $personId); }) : $equipos ;
        //$equipos = ($sedeId) ? $equipos->whereHas('divisionesSedes', function ($query) use ($sedeId) { $query->where('id_sede', $sedeId);}) : $equipos ;

        if ($sedeId) {
          $equipos = $equipos->join('asignar', 'equipos.id', '=', 'asignar.id_equipo')  
             ->join('persona_division_sede', 'asignar.id_persona', '=', 'persona_division_sede.id_persona')
             ->join('division_sede', 'persona_division_sede.id_division_sede', '=', 'division_sede.id')
             ->where('division_sede.id_sede', $sedeId);
        }

        $equipos = $equipos->get(); //dd($equipos);

        $personas = Persona::all();
        $divisions = Division::all();
        $sedes = Sede::all();

        return view('reporte.index', compact('equipos','divisions','sedes','personas','personId','sedeId'));
    }

    public function pdf(Request $request)
    {
          $filter = $request->filter;
          $equipos=Equipos::all();
          $pdf=Pdf::loadView('equipo.pdf', compact('equipos'))->setPaper('a4', 'landscape');
          return $pdf->stream();

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

