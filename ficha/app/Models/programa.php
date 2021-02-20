<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    use HasFactory;
    protected $table ='programas';
    protected $primaryKey ='id';
    protected $fillable = [
        'programa','sigla'
    ];
}
