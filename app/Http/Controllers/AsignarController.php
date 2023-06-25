<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asignar;
use App\Models\Equipos;
use App\Models\Perifericos;
use App\Models\Persona;
use App\Models\TipoPeriferico;
use Illuminate\Http\Request;

class AsignarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaciones = Asignar::with('persona', 'equipo', 'periferico')->get();
    
        $asignacionesAgrupadas = $asignaciones->groupBy(function($asignacion) {
            // Agrupa por la identificación de la persona y del equipo.
            return $asignacion->id_persona . '-' . $asignacion->id_equipo;
        });
    
        return view('asignar.index', compact('asignacionesAgrupadas'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        $equipos = Equipos::all();
        $perifericos = Perifericos::all();
        $tipo_perifericos = TipoPeriferico::all(); // Obtener todos los registros de la tabla "tipo_perifericos"
        return view('asignar.create', compact('personas','equipos', 'perifericos', 'tipo_perifericos'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_persona = $request->id_persona;
        $id_equipo = $request->id_equipo;
        $id_perifericos = $request->id_periferico;
        $id_perifericos = array_filter($id_perifericos); // Remover todos los valores '0' o vacíos
        $estatus = $request->estatus;
    
        foreach($id_perifericos as $id_periferico) {
            Asignar::create([
                'id_persona' => $id_persona,
                'id_equipo' => $id_equipo,
                'id_periferico' => $id_periferico,
                'estatus' => $estatus
            ]);
        }
    
        return redirect('asignar');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function desincorporar($id)
    {
        $asignaciones = Asignar::where('id_persona', $id)->get();
        $personas = Persona::all();
        $equipos = Equipos::all();
        $tipo_perifericos = TipoPeriferico::all();
        $perifericos = Perifericos::all();
    
        // Si hay asignaciones para esta persona, usamos la primera para obtener los datos de la persona y el equipo
        if (!$asignaciones->isEmpty()) {
            $asignacion = $asignaciones->first();
        } else {
            // Si no hay asignaciones para esta persona, creamos un nuevo objeto Asignar con los valores predeterminados
            $asignacion = new Asignar;
            $asignacion->id_persona = 0;
            $asignacion->id_equipo = 0;
        }
    
        // Creamos una matriz con los ids de los tipos de periféricos de todas las asignaciones
        $ids_perifericos_por_tipo = [];
        foreach($asignaciones as $asignacion) {
            $periferico = $asignacion->periferico; // Asumiendo que tienes una relación "periferico" en el modelo Asignar
            $ids_perifericos_por_tipo[$periferico->id_tipo] = $periferico->id;
        }

    
    return view('asignar.desincorporar', compact('asignacion', 'personas', 'equipos', 'tipo_perifericos', 'perifericos', 'ids_perifericos_por_tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignaciones = Asignar::where('id_persona', $id)->get();
        $personas = Persona::all();
        $equipos = Equipos::all();
        $tipo_perifericos = TipoPeriferico::all();
        $perifericos = Perifericos::all();
    
        // Si hay asignaciones para esta persona, usamos la primera para obtener los datos de la persona y el equipo
        if (!$asignaciones->isEmpty()) {
            $asignacion = $asignaciones->first();
        } else {
            // Si no hay asignaciones para esta persona, creamos un nuevo objeto Asignar con los valores predeterminados
            $asignacion = new Asignar;
            $asignacion->id_persona = 0;
            $asignacion->id_equipo = 0;
        }
    
        // Creamos una matriz con los ids de los tipos de periféricos de todas las asignaciones
        $ids_perifericos_por_tipo = [];
        foreach($asignaciones as $asignacion) {
            $periferico = $asignacion->periferico; // Asumiendo que tienes una relación "periferico" en el modelo Asignar
            $ids_perifericos_por_tipo[$periferico->id_tipo] = $periferico->id;
        }

    
    return view('asignar.edit', compact('asignacion', 'personas', 'equipos', 'tipo_perifericos', 'perifericos', 'ids_perifericos_por_tipo'));


    }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//
    }
    public function updateByPerson(Request $request, $id)
    {
        // Obtén los periféricos de la solicitud
        $perifericos_seleccionados = $request->id_periferico;
    
        // Encuentra todas las asignaciones para la persona específica
        $asignaciones = Asignar::where('id_persona', $id)->get();
    
        // Primero, manejemos las asignaciones existentes
        foreach ($asignaciones as $asignacion) {
            // Si este periférico no está en la solicitud, eliminamos la asignación
            if (!in_array($asignacion->id_periferico, $perifericos_seleccionados)) {
                $asignacion->delete();
            } else {
                // Si este periférico está en la solicitud, actualizamos la asignación
                $asignacion->id_equipo = $request->id_equipo;
    
                $key = array_search($asignacion->id_periferico, $perifericos_seleccionados);
                if ($key !== false) {
                    $asignacion->id_periferico = $request->id_periferico[$key];
                    $asignacion->estatus = $request->estatus;
                    $asignacion->observacion = $request->observacion;
                    $asignacion->save();
                }
                // Una vez manejado, lo eliminamos del array
                unset($perifericos_seleccionados[$key]);
            }
        }
    
        // Ahora, manejamos cualquier periférico nuevo seleccionado en la solicitud
        foreach ($perifericos_seleccionados as $key => $id_periferico) {
            if ($id_periferico != 0) {
                $asignacion = new Asignar;
                $asignacion->id_persona = $id;
                $asignacion->id_equipo = $request->id_equipo;
                $asignacion->id_periferico = $id_periferico;
                
                $asignacion->save();
            }
        }
    
        return redirect('asignar');
    }
    

    
  
    
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
