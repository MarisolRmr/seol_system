<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;



class OficinistaController extends Controller
{
    //
    public function modificarDocumento(Request $request)
    {
        $nombreArchivo = $request->nombreArchivo;
        $rutaArchivo = storage_path("app/public/plantillas/test.docx");

        if (!file_exists($rutaArchivo)) {
            return response()->json(['error' => 'El archivo no existe.']);
        }

        $templateProcessor = new TemplateProcessor($rutaArchivo);
        $nombre = $request->nombre;

        $templateProcessor->setValue('nombre', $nombre);
        $templateProcessor->setValue('curp', $request->curp);
        $templateProcessor->setValue('matricula', $request->matricula);
        $templateProcessor->setValue('cuatrimestre', $request->cuatrimestre);
        $templateProcessor->setValue('fecha', $request->fecha);

        $rutaTemporal = storage_path("app/public/plantillas/test2.docx");
        $templateProcessor->saveAs($rutaTemporal);

        return response()->download($rutaTemporal, "generate.docx")
        ->deleteFileAfterSend(true);
    }

    public function ProcesoVista(){
        return view('Oficinista.enproceso');
    }

    public function solicitudesVista(){
        return view('Oficinista.solicitudes');
    }

    public function HistorialVista(){
        return view('Oficinista.historial');
    }

    public function editarDocumentoView(){
        return view('Oficinista.EditarDocumento');
    }
}
