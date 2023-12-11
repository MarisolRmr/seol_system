<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UsuariosDocumentosPago extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'documento_id',
        'pago_id',
        'fecha_solicitud',
        'status',
        'fecha_entrega',
        'plantillaCreada'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class, 'documento_id');
    }
    
    public function solicitudes_aceptadas()
    {
        return $this->hasManyThrough(SolicitudAceptada::class, UsuariosDocumentosPago::class, 'user_id', 'usuarios_documentos_pagos_id', 'id', 'id');
    }

}
