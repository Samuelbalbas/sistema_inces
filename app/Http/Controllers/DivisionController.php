<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DivisionController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-division|crear-division|editar-division|borrar-division', ['only' => ['index']]);
         $this->middleware('permission:crear-division', ['only' => ['create','store']]);
         $this->middleware('permission:editar-division', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-division', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           //Cambiar numero 5 para aumentar los registros que muestra el catalogo
           $datos['divisions']=division::all();
           return view('division.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDivision = request()->except('_token');
        division::create($datosDivision);
        // dd($datosDivision);
        // return response()->json($datosDivision);

        return redirect ('division');
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
        $division=division::findOrFail($id);

        return view('division.edit',compact('division'));
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
        $datosDivision = request()->except('_token','_method');
        division::where('id','=',$id)->update($datosDivision);

        return redirect ('division');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::findOrFail($id);
    
        // Elimina las relaciones en la tabla puente
        $division->sedes()->detach();
    
        // Elimina el registro de la tabla division
        $division->delete();

        return redirect('division')->with('eliminar', 'ok');
    }
}