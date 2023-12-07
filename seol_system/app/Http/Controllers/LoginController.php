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
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Condicion para saber si el user se pudo autenticar
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            // back() para volver a la pagina anterior, en este caso, con un mensaje
            return back()->with('errors', 'Credenciales Incorrectas');
        }

        $rol= User::where('email',$request->email)->select('rol')->first();

        // if($status->status==0){
        //     return back()->with('errors', 'El usuario está incativo');
        // }
        //dd($rol);
        // Redirecciona
        //return redirect()->route('post.index');

        
        // Redirecciona
        if ($rol === 1) {
            return view('Admin.dashboard'); // Ruta para el administrador
            return redirect()->route('post.index');

        } elseif ($rol === 2) {
            dd("entre Oficnista");
            return view('Oficinista.dashboard'); // Ruta para el maestro
        } elseif ($rol === 3) {
            dd($rol);
            return view('estudiante.dashboard'); // Ruta para el estudiante
            return redirect()->route('post.index');

        }

        


    }



}