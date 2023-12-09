<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function dashboard(){
        return view('estudiante.dashboard');
    }

    public function solicitudes(){
        return view('estudiante.solicitudes');
    }

    public function enproceso(){
        return view('estudiante.enproceso');
    }

    public function historial(){
        return view('estudiante.historial');
    }

    public function Perfil(){
        return view('estudiante.perfil');
    }

}
