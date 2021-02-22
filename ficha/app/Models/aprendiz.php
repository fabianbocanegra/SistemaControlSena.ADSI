<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aprendiz extends Model
{
    use HasFactory;
    protected $table='aprendices';
    protected $primaryKey='id';
    protected $fillable = [
        'documento',
        'nombre',
        'apellidos'
        ,'correo'
        ,'fechadeNacimiento'
        ,'sexo'
        ,'tipoDoc'
        ,'idFicha'
    ];
}
