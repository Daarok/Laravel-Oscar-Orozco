<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espejo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'descripcion', 'material', 'peso',
        'precio', 'modelo', 'diseño', 'stock',
        'dimensiones', 'forma', 'proveedor', 'color',
        'imagen'
    ];

}

