<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Pago;
use App\Models\UsuariosDocumentosPago;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function dashboard()
    {
        return view('estudiante.dashboard');
    }

    public function solicitudes()
    {
        $documentos=Documento::all();
        return view('estudiante.solicitudes',["documentos"=>$documentos]);
    }

    public function store(Request $request)
    {

        //Se insertan los valores a la tabla Pagos (ciertos valores default)
        $pago = Pago::create([
            'referencia' => 'referencia',
            'fecha_limite' => Carbon::now()->addDays(3),
            'fecha_pago' => Carbon::now(),
            'plantilla' => 'plantilla',
            'archivo_generado' => 'archivo_generado',
            'archivo_subido' => 'archivo_subido',
        ]);

        //Se insertan los valores a la tabla Usuario_Documento_Pago (ciertos valores default)
        UsuariosDocumentosPago::create([
            'user_id' => auth('')->user()->id,
            'documento_id' => $request->tipo,
            'pago_id' => $pago->id,
            'fecha_solicitud' => Carbon::now(),
            'status' => 'solicitado',
            'fecha_entrega' => Carbon::now()->addDays(3),
            'plantillaCreada' => 'NoListo'
        ]);

        return redirect()->route('estudiante.solicitudes');
    }

    public function descargarDocumento($id){
        $solicitud = UsuariosDocumentosPago::find($id);
        $ruta = storage_path("app/public/generados/{$solicitud->plantillaCreada}");
        return response()->download($ruta, "documento.docx");

    }

    public function enproceso()
    {
        return view('estudiante.enproceso');
    }

    public function historial()
    {
        $user_id = auth()->user()->id;

        $solicitudes = UsuariosDocumentosPago::where('user_id', $user_id)->get();
        return view('estudiante.historial', ['solicitudes' => $solicitudes]);
    }

    public function Perfil()
    {
        return view('estudiante.perfil');
    }
}
