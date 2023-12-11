<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosDocumentosPago extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'documento_id',
        'pago_id',
        'fecha_solicitud',
        'status',
        'fecha_entrega'
    ];
}
