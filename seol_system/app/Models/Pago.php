<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'referencia',
        'fecha_limite',
        'fecha_pago',
        'plantilla',
        'archivo_generado',
        'archivo_subido'
    ];

    
}
