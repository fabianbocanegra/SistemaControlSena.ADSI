<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $table='fichas';
    protected $primaryKey='id';
    protected $fillable = [
        'jornada','estado','programa'
    ];
}
