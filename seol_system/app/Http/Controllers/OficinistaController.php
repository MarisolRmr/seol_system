<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OficinistaController extends Controller
{
    //

    public function ProcesoVista(){
        return view('Oficinista.enproceso');
    }

    public function solicitudesVista(){
        return view('Oficinista.solicitudes');
    }

    public function HistorialVista(){
        return view('Oficinista.historial');
    }
}
