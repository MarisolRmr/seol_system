<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin(){
        return view('Admin.dashboard');
    }

    public function agregarAlumno(){
        return view('Admin.AñadirAlumno');
    }

    public function gestionPlantillaView(){
        return view('Admin.GestionarPlantilla');
    }

    public function agregarOficinista(){
        return view('Admin.AgregarOficinista');
    }
}
