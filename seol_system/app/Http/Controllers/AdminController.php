<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    // public function __construct()
    // {
    //     // Para verificar que el user este autenticado
    //     // except() es para indicar cuales metodos pueden usarse sin autenticarse
    //     $this->middleware('auth');
    // }
    public function admin(){
        return view('Admin.dashboard');
    }

    public function Alumnos(){
        $usuarios = User::where('rol', 3)->get();
        return view('Admin.Alumnos', ['usuarios' => $usuarios]);
    }

    public function agregarAlumno(){
        return view('Admin.AñadirAlumno');
    }

    public function gestionPlantillaView(){
        return view('Admin.GestionarPlantilla');
    }

    public function editarDocumentoView(){
        return view('Admin.EditarDocumento');
    }

    public function storePlantilla(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tipo' => 'required',
            'precio' => 'required',
            'archivo_docx' => 'required',
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
        }
        $archivoDocx = $request->file('archivo_docx');
        $nombreArchivo = $this->generarNombreUnico($archivoDocx);

        // Guarda el archivo en el directorio deseado
        $ruta = $archivoDocx->storeAs('public/plantillas', $nombreArchivo);

        // Guarda los detalles en la base de datos
        Documento::create([
            'tipo' => $request->tipo,
            'precio' => $request->precio,
            'plantilla' => $nombreArchivo,
        ]);
        
        return redirect()->back()->with('success', 'Archivo .docx subido correctamente.');
    }

    private function generarNombreUnico($archivo)
    {
        $nombreOriginal = pathinfo($archivo->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $archivo->getClientOriginalExtension();
        $nombreUnico = $nombreOriginal . '_' . uniqid() . '.' . $extension;

        return $nombreUnico;
    }

    public function agregarOficinista(){
        return view('Admin.AgregarOficinista');
    }

    public function Oficinistas(){
        $usuarios = User::where('rol', 2)->get();
        return view('Admin.Oficinistas', ['usuarios' => $usuarios]);
    }

    public function Documentos(){
        $documento=Documento::all();
        return view('Admin.plantillas',["documento"=>$documento]);
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
            'rfc'=>'required|unique:users',
            'curp' => 'required|unique:users',
            'matricula' => 'required|unique:users',
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
            'rfc'=> $request->rfc,
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
        ]);

        //Se añade el registro a la base de datos
        User::create([
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellidopaterno,
            'apellido_materno' => $request->apellidomaterno,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol' => 2,
        ]);
        return redirect()->route('admin.alumnoOficinista')->with('success', 'El usuario ha sido registrado correctamente');
    }
}