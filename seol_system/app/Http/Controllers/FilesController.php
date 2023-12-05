<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function __construct()
    {
        //Al método index con el construct le pasamos el parámetro de autenticación
        $this->middleware('auth');
    }
    public function docx(Request $request){
        $docx = $request->file('file');
        // Obtenemos el nombre del docx
        $docx_name = $docx->getClientOriginalName();
        //Se obtiene el path en donde se almecenara el archivo
        $docxPath = public_path('uploads') . '/' . $docx_name;
        //copiar el path para que dropzone pueda encontrar el archivo
        copy($docx,$docxPath);
        //Retorna el nombre del docx
        return response()->json(['plantilla' => $docx_name]);
    }

}
