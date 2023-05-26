<?php

namespace App\Http\Controllers;

use App\Models\sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Division;
use App\Models\DivisionSede;
// use Illuminate\Pagination\LengthAwarePaginator;

class SedeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-sede|crear-sede|editar-sede|borrar-sede', ['only' => ['index']]);
         $this->middleware('permission:crear-sede', ['only' => ['create','store']]);
         $this->middleware('permission:editar-sede', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-sede', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::with('division')->get(); // Cargar la relación con "division"
        return view('sede.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all(); // Obtener todos los registros de la tabla "division"
        return view('sede.create', compact('divisions')); // Pasar los divisions a la vista "form.blade.php"
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosSede = request()->except('_token');
        $sede = Sede::create($datosSede);
        
        // Obtener las divisiones seleccionadas
        $divisiones = $request->input('divisiones', []);
                
        // Guardar las relaciones en la tabla puente
        $sede->division()->sync($divisiones);

        return redirect ('sede');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede=Sede::find($id);
        $divisions = Division::all(); // Obtener todos los registros de la tabla "division"

        return view('sede.edit',compact('sede','divisions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Actualiza los datos de la sede con los datos del formulario
        $sede = Sede::findOrFail($id);
        $sede->nombre_sede = $request->nombre_sede;
        $sede->save();
    
        // Actualiza las divisiones de la sede en la tabla puente
        $sede->division()->sync($request->input('division', []));
    
        return redirect('sede');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Obtener la sede a eliminar
        $sede = Sede::findOrFail($id);
    
        // Eliminar los registros relacionados en la tabla puente
        $sede->division()->detach();
    
        // Eliminar la sede
        $sede->delete();

        return redirect('sede')->with('eliminar', 'ok');
    }
}
