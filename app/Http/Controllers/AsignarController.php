<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asignar;
use App\Models\Equipos;
use App\Models\Perifericos;
use App\Models\Persona;
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
        $personas = Persona::all(); // Obtener todos los registros de la tabla "persona"
        $equipos = Equipos::all(); // Obtener todos los registros de la tabla "équipo"
        $perifericos = Perifericos::all(); // Obtener todos los registros de la tabla "periférico"
        return view('asignar.create', compact('personas','equipos', 'perifericos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosAsignar = request()->except('_token');
        Asignar::create($datosAsignar);

        return redirect ('asignar');
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
        //
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
