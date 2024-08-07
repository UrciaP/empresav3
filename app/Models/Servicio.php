<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    // use HasFactory;
    protected $fillable = [
        'cperApellido',
        'cPerNombre',
        'cPerDireccion',
        'dPerFecaNac',
        'nPerEdad',
        'nPerSueldo',
        'nPerEstado',
    ];
}
