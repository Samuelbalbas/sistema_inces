<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos;
use Barryvdh\DomPDF\Facade\Pdf;

class ReporteController extends Controller
{
    public function index(Request $request)
    {
    	  $filter = $request->filter; //dd($request->desincorporado);
        $equipos = Equipos::with('marca')->get(); // Cargar la relación con "marca"
        $equipos = Equipos::with('modelo')->get(); // Cargar la relación con "modelo"

        return view('reporte.index', compact('equipos'));
    }

    public function pdf(Request $request)
    {
          $filter = $request->filter;
          $equipos=Equipos::all();
          $pdf=Pdf::loadView('equipo.pdf', compact('equipos'))->setPaper('a4', 'landscape');
          return $pdf->stream();

    }

}
