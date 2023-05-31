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
        $asignaciones = Asignar::with('persona')->get(); // Cargar la relación con "persona"
        $asignaciones = Asignar::with('equipo')->get(); // Cargar la relación con "équipo"
        // $asignaciones = Asignar::with('periferico')->get(); // Cargar la relación con "periférico"
        return view('asignar.index', compact('asignaciones'));
        // return view('asignar.index');

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
    
        foreach($id_perifericos as $id_periferico) {
            Asignar::create([
                'id_persona' => $id_persona,
                'id_equipo' => $id_equipo,
                'id_periferico' => $id_periferico
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
    public function show($id)
    {
        //
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
    
        // Creamos una matriz con los ids de los periféricos de todas las asignaciones
        $ids_perifericos = $asignaciones->pluck('id_periferico')->toArray();
    
        return view('asignar.edit', compact('asignacion', 'personas', 'equipos', 'tipo_perifericos', 'perifericos', 'ids_perifericos'));
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
