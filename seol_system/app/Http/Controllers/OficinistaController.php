<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;



class OficinistaController extends Controller
{
    //
    public function modificarDocumento(Request $request, $id)
    {
        $documento = Documento::find($id);

        $nombreArchivo = $documento->plantilla;
        $rutaArchivo = storage_path("app/public/plantillas/{$nombreArchivo}");

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
        $templateProcessor->setValue('carrera', $request->carrera);

        $rutaTemporal = storage_path("app/public/plantillas/test2.docx");
        $templateProcessor->saveAs($rutaTemporal);

        return response()->download($rutaTemporal, "generate.docx")
        ->deleteFileAfterSend(true);
    }

    public function dashboard(){
        return view('Oficinista.dashboard');
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

    public function Perfil(){
        return view('Oficinista.perfil');
    }

    public function editarDocumentoView($id){
        $documento = Documento::find($id);
        $nombreDocumento= $documento->tipo;
        return view('Oficinista.EditarDocumento', ['id' => $id, 'nombreDocumento' => $nombreDocumento]);
    }

    public function Documento(){
        $documento=Documento::all();
        return view('Oficinista.plantillas',["documento"=>$documento]);
    }
}
