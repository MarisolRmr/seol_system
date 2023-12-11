<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsuariosDocumentosPago;

class SolicitudAceptada extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuarios_documentos_pagos_id',
        'nombreSolicitud'
    ];
    public function usuarios_documentos_pago()
    {
        return $this->belongsTo(UsuariosDocumentosPago::class, 'usuarios_documentos_pagos_id');
    }
}
