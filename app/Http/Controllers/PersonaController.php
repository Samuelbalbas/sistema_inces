<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;
use App\Models\cargo;
use App\Models\Division;
use App\Models\DivisionSede;
use App\Models\Sede;
use App\Models\PersonaDivisionSede;


class PersonaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-persona|crear-persona|editar-persona|borrar-persona', ['only' => ['index']]);
         $this->middleware('permission:crear-persona', ['only' => ['create','store']]);
         $this->middleware('permission:editar-persona', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-persona', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::with('cargo')->get(); // Cargar la relación con "cargo"
        return view('persona.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cargos = cargo::all(); // Obtener todos los registros de la tabla "cargo"
        // return view('persona.create', compact('cargos')); // Pasar los cargos a la vista "form.blade.php"
        
        /* //////////////////////////////////////////////////////////////////// */
        
        $cargos = Cargo::all(); // Obtener todos los registros de la tabla "cargo"
        $sedes = Sede::all(); // Obtener todos los registros de la tabla "sede"
        $divisiones = Division::join('division_sede', 'divisions.id', '=', 'division_sede.id_division')
        ->join('sedes', 'division_sede.id_sede', '=', 'sedes.id')
        ->pluck('divisions.nombre_division', 'divisions.id')
        ->toArray(); // Obtener los nombres de las divisiones relacionadas con las sedes
                              
        return view('persona.create', compact('cargos', 'sedes', 'divisiones')); // Pasar los cargos, sedes y divisiones a la vista "create.blade.php"
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $datosPersona = request()->except('_token');
    //     Persona::insert($datosPersona);

    //     return redirect ('persona');

        /* //////////////////////////////////////////////////////////////////// */
    
        $datosPersona = $request->except('_token');
        $persona = Persona::create($datosPersona);

        $idDivision = $request->input('id_division');

        $personaDivisionSede = new PersonaDivisionSede();
        $personaDivisionSede->id_persona = $persona->id;
        $personaDivisionSede->id_division_sede = $idDivision;
        $personaDivisionSede->save();

        return redirect('persona');
    }

    public function getBySede(Sede $sede)
    {
        $divisiones = Division::join('division_sede', 'divisions.id', '=', 'division_sede.id_division')
            ->join('sedes', 'division_sede.id_sede', '=', 'sedes.id')
            ->where('division_sede.id_sede', $sede->id)
            ->pluck('divisions.nombre_division', 'division_sede.id')
            ->toArray();

        return response()->json($divisiones);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $persona=Persona::find($id);
        // $cargos = Cargo::all(); // Obtener todos los registros de la tabla "cargo"

        // return view('persona.edit',compact('persona','cargos'));

        /* //////////////////////////////////////////////////////////////////// */

        $persona = Persona::findOrFail($id);
            $cargos = Cargo::all();
            $sedes = Sede::all();
        // Obtener las divisiones asociadas a la sede de la persona
        $divisiones = Division::join('division_sede', 'divisions.id', '=', 'division_sede.id_division')
        ->where('division_sede.id_sede', $persona->divisionesSedes[0]->id_sede) // Obtener el ID de la sede asociada a la persona
        ->pluck('divisions.nombre_division', 'divisions.id')
        ->toArray();

        // Obtener el registro de persona_division_sede para la persona seleccionada
        $personaDivisionSede = PersonaDivisionSede::where('id_persona', $id)->first();
    
        // Obtener los IDs de la sede y la división asociados a la persona
        $id_sede = null;
        $id_division = null;
    
        if ($personaDivisionSede) {
            $id_sede = $personaDivisionSede->divisionSede->sede->id;
            $id_division = $personaDivisionSede->divisionSede->division->id;
        }
    
        return view('persona.edit', compact('persona', 'cargos', 'sedes', 'divisiones', 'id_sede', 'id_division'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Actualiza los datos de la persona con los datos del formulario
        // persona::where('id', $id)->update($request->except(['_token', '_method', 'id']));
        
        // Obtén la persona actualizada
        // $persona = persona::findOrFail($id);
        
        // Obtén la lista de cargos
        // $cargos = Cargo::all();

        // return redirect ('persona');

        /* //////////////////////////////////////////////////////////////////// */

        // Obtener y actualizar los datos de la persona
        $persona = Persona::find($id);
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->cedula = $request->input('cedula');
        $persona->id_usuario = $request->input('id_usuario');
        $persona->id_cargo = $request->input('id_cargo');
        $persona->telefono = $request->input('telefono');

       // Obtener el ID de la relación persona_division_sede correspondiente a la persona
       $id_division_sede = $request->input('id_division_sede');

       // Obtener el nuevo ID de la tabla division_sede
       $nuevo_id_division_sede = $request->input('division_sede');

       // Actualizar la relación persona_division_sede si existe
       if ($id_division_sede) {
           $relacion = PersonaDivisionSede::find($id_division_sede);
           if ($relacion) {
               $relacion->id_division_sede = $nuevo_id_division_sede;
               // Actualizar otros campos de la relación según corresponda
               $relacion->save();
           }
       }

       // Guardar los cambios
       $persona->save();

       // Redireccionar a la vista de detalle o a donde corresponda
       return redirect()->route('persona.index', $id)->with('success', 'La persona ha sido actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // persona::destroy($id);
        // return redirect('persona');

        /* //////////////////////////////////////////////////////////////////// */

        // Obtener la persona a eliminar
        $persona = persona::findOrFail($id);
    
        // Eliminar los registros relacionados en la tabla puente
        $persona->PersonaDivisionSede()->detach();
    
        // Eliminar la persona
        $persona->delete();
    
        return redirect('persona')->with('eliminar', 'ok');
    }
}
