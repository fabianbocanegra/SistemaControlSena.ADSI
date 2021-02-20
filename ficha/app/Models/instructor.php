<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    use HasFactory;
    protected $table='instructores';
    protected $primaryKey='id';
    protected $fillable = [
        'nombre',
        'apellido',
        'documento',
        'foto',
        'idFicha',
        'estado'
    ];
}
