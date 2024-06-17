<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'Persona';
    protected $fillable = [
        'cperApellido',
        'cPerNombre',
        'cPerDireccion',
        'dPerFecNac',
        'nPerEdad',
        'nPerSueldo',
        'nPerEstado',
    ];
}
