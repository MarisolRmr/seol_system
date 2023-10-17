<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        //protegemos la url
        //al metodo index con el constructor le pasamos el parametro de autenticacion
        $this->middleware('auth')->except('index', 'home');
    }

    public function index(){
        return view('auth.login');
    }

    public function home() {
        if (Auth::check()) {
            $user = Auth::user(); // Obtener el usuario autenticado
            //$rol = $user->rol; // Obtener el tipo de usuario del campo 'rol'

            return view('dashboard');

            
            // Redirigir según el tipo de usuario
           /* switch ($rol) {
                case 1: //Admin
                    return view('admin.dashboard');
                    break;
                case 2: // maestro
                    return view('maestro.dashboard');
                    break;
                case 3: // estudiante
                    return view('estudiante.dashboard');
                    break;
            } */

        } else {
            return view('auth.login');
        }
    }

}