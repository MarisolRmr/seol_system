<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function loginForm(){
        return view('auth.login');
    }

    //Funcion para autentificar al usuario
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        // Comprobar si el usuario existe como correo electrónico o nombre de usuario
        $user = User::where('username', $request->username)
        ->orWhere('password', $request->password)
        ->first();

        if (!$user) {
        return back()->with('mensaje', 'El usuario o correo electrónico no fue encontrado.');
        }

        // Verificar las credenciales
        if (!auth()->attempt(['password' => $request->password, 'username' => $user->username], $request->remember) &&
        !auth()->attempt(['password' => $request->password, 'password' => $user->password], $request->remember)) {
        return back()->with('mensaje', 'Contraseña incorrecta, vuelva a intentarlo.');
        }


        return view('dashboard'); // Ruta para el dashboard


        /*
        // Redirecciona
        if ($user->rol === 1) {
            return view('admin.dashboard'); // Ruta para el administrador
        } elseif ($user->rol === 2) {
            return view('maestro.dashboard'); // Ruta para el maestro
        } elseif ($user->rol === 3) {
            return view('estudiante.dashboard'); // Ruta para el estudiante
        }

        */


    }



}