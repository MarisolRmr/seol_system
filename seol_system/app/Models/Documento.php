<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    // Son los datos que se va a llenar en la DB
    protected $fillable = [
        'tipo',
        'precio',
        'plantilla'
    ];


}
