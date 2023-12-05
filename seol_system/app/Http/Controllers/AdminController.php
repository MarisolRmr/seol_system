<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    //Funcion para almacenar Alumnos en la base de datos
    public function storeAlumno(Request $request){
        //Se validan los campos
        $this->validate($request, [
            'nombre' => 'required',
            'apellidopaterno' => 'required',
            'apellidomaterno' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'curp' => 'required',
            'matricula' => 'required',
            'carrera' => 'required',
            
        ]);
        //Se añade el registro a la base de datos
        User::create([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellidopaterno,
            'apellido_materno' => $request->apellidomaterno,
            'password' => Hash::make($request->password),
            'matricula' => $request->matricula,
            'carrera' => $request->carrera,
            'email' => $request->email,
            'curp' => $request->curp,
            'rol' => 3,
        ]);
        return redirect()->route('admin.alumnoagregar')->with('success', 'El usuario ha sido registrado correctamente');
    }

    //Funcion para almacenar Alumnos en la base de datos
    public function storeOficinista(Request $request){
        //Se validan los campos
        $this->validate($request, [
            'nombre' => 'required',
            'apellidopaterno' => 'required',
            'apellidomaterno' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'curp' => 'required',
            
        ]);
        //Se añade el registro a la base de datos
        User::create([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellidopaterno,
            'apellido_materno' => $request->apellidomaterno,
            'password' => Hash::make($request->password),
            'matricula' => $request->matricula,
            'carrera' => $request->carrera,
            'email' => $request->email,
            'curp' => $request->curp,
            'rol' => 2,
        ]);
        return redirect()->route('admin.alumnoagregar')->with('success', 'El usuario ha sido registrado correctamente');
    }
}