<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'id_productos';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria',
        'precio',
        'stock',
        'fecha_actualizacion'
    ];
}

