<?php

namespace App\Http\Controllers;

use App\Models\perifericos;
use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\TipoPeriferico;
use Illuminate\Database\QueryException;
class PerifericosController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-periferico|crear-periferico|editar-periferico|borrar-periferico', ['only' => ['index']]);
         $this->middleware('permission:crear-periferico', ['only' => ['create','store']]);
         $this->middleware('permission:editar-periferico', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-periferico', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perifericos = Perifericos::with('marca')->get(); // Cargar la relación con "marca"
        $perifericos = Perifericos::with('modelo')->get(); // Cargar la relación con "modelo"
        $perifericos = Perifericos::with('tipo_periferico')->get(); // Cargar la relación con "tipo de periférico"
        return view('periferico.index', compact('perifericos'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = marca::all(); // Obtener todos los registros de la tabla "marca"
        $modelos = modelo::all(); // Obtener todos los registros de la tabla "modelo"
        $tipo_perifericos = TipoPeriferico::all(); // Obtener todos los registros de la tabla "tipo de periférico"
        return view('periferico.create', compact('marcas','modelos', 'tipo_perifericos')); // Pasar los registros a la vista "create.blade.php"
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPeriferico = request()->except('_token');
        Perifericos::create($datosPeriferico);

        return redirect ('periferico');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perifericos  $perifericos
     * @return \Illuminate\Http\Response
     */
    public function show(perifericos $perifericos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perifericos  $perifericos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periferico=Perifericos::find($id);
        $marcas = Marca::all(); // Obtener todos los registros de la tabla "marca"
        $modelos = Modelo::all(); // Obtener todos los registros de la tabla "modelo"
        $tipo_perifericos = TipoPeriferico::all(); // Obtener todos los registros de la tabla "tipo de periférico"

        return view('periferico.edit',compact('periferico','marcas','modelos', 'tipo_perifericos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perifericos  $perifericos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perifericos $perifericos, $id)
    {
         // Actualiza los datos del periferico con los datos del formulario
         Perifericos::where('id', $id)->update($request->except(['_token', '_method', 'id']));
        
         // Obtén el periferico actualizado
         $periferico = Perifericos::findOrFail($id);
         
         // Obtén la lista de las marcas modelos y Tipos de Périfericos
         $marcas = Marca::all();
         $modelos = Modelo::all();
         $tipo_perifericos = TipoPeriferico::all(); // Obtener todos los registros de la tabla "tipo de periférico"
         
         return redirect ('periferico');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perifericos  $perifericos
     * @return \Illuminate\Http\Response
     */
    public function destroy(perifericos $perifericos, $id)
    {
        try {
            Perifericos::destroy($id);
            return redirect('periferico')->with('eliminar', 'ok');

        } catch (QueryException $exception) {
            $errorMessage = 'Error: No se puede eliminar el periferico debido a que tiene este perifericos asignado a una persona.';
            return redirect()->back()->withErrors($errorMessage);
        }
    }
}
