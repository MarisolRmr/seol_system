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
        return view('estudiante.solicitudes');
    }

    public function store(Request $request)
    {
        //Se insertan los valores a la tabla Documentos (ciertos valores default)
        $documento = Documento::create([
            'tipo' => $request->tipo,
            'precio' => 0,
            'plantilla' => 'plantilla',
        ]);

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
            'documento_id' => $documento->id,
            'pago_id' => $pago->id,
            'fecha_solicitud' => Carbon::now(),
            'status' => 'solicitado',
            'fecha_entrega' => Carbon::now()->addDays(3),
        ]);

        return redirect()->route('estudiante.solicitudes');
    }

    public function enproceso()
    {
        return view('estudiante.enproceso');
    }

    public function historial()
    {
        return view('estudiante.historial');
    }

    public function Perfil()
    {
        return view('estudiante.perfil');
    }
}
