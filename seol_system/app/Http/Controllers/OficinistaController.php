<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\UsuariosDocumentosPago;
use App\Models\SolicitudAceptada;
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

        $parteUnica = uniqid();

        $nombreArchivoFinal = $parteUnica . " " . $nombreArchivo;

        $rutaTemporal = storage_path("app/public/generados/{$nombreArchivoFinal}");
        $templateProcessor->saveAs($rutaTemporal);

        $solicitud = UsuariosDocumentosPago::find($request->solicitud);
        $solicitud->plantillaCreada = $nombreArchivoFinal;
        $solicitud->status = "Finalizado";
        $solicitud->save();

        $aceptadas = SolicitudAceptada::all();
        $documento = Documento::find($id);
        $nombreDocumento = $documento->tipo;

        return view('Oficinista.EditarDocumento', ['id' => $id, 'nombreDocumento' => $nombreDocumento, 'aceptadas'=> $aceptadas]);
    }

    public function aceptarSolicitud($id, $nombre, $documento){


        $existeSolicitud = SolicitudAceptada::where('usuarios_documentos_pagos_id', $id)->exists();


        if (!$existeSolicitud) {
            SolicitudAceptada::create([
                'usuarios_documentos_pagos_id' => $id,
                'nombreSolicitud' => $nombre . " " . $documento
            ]);

            return redirect()->route('oficinista.solicitudesVista');
        } else {
            return redirect()->back()->with('error', 'La solicitud ya ha sido aceptada anteriormente.');
        }
    }

    public function dashboard(){
        return view('Oficinista.dashboard');
    }

    public function ProcesoVista(){
        $solicitudes = UsuariosDocumentosPago::with('user', 'documento')->get();
        return view('Oficinista.enproceso', ['solicitudes' => $solicitudes]);
    }

    public function solicitudesVista(){
        $solicitudes = UsuariosDocumentosPago::with('user', 'documento')->get();
        return view('Oficinista.solicitudes', ['solicitudes' => $solicitudes]);
    }

    public function HistorialVista(){
        $solicitudes = UsuariosDocumentosPago::with('user', 'documento')->get();
        return view('Oficinista.historial', ['solicitudes' => $solicitudes]);
    }

    public function Perfil(){
        return view('Oficinista.perfil');
    }

    public function editarDocumentoView($id){
        $aceptadas = SolicitudAceptada::all();
        $documento = Documento::find($id);
        $nombreDocumento = $documento->tipo;
        return view('Oficinista.EditarDocumento', ['id' => $id, 'nombreDocumento' => $nombreDocumento, 'aceptadas'=> $aceptadas]);
    }

    public function Documento(){
        $documento=Documento::all();
        return view('Oficinista.plantillas',["documento"=>$documento]);
    }
}
