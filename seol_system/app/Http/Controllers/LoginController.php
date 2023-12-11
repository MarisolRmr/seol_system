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
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        // Condicion para saber si el user se pudo autenticar
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            // back() para volver a la pagina anterior, en este caso, con un mensaje
            return back()->with('errors', 'Credenciales Incorrectas');
        }

        // Obtener el rol del usuario
        $userRole = User::where('email', $request->email)->value('rol');

        // Redirecciona
        if ($userRole == 1) {
            return redirect()->route('Admin.dashboard');
        } elseif ($userRole == 2) {
            return redirect()->route('oficinista.dashboard');
        } elseif ($userRole == 3) {
            return redirect()->route('estudiante.dashboard');
        }
    }




}