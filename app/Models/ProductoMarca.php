<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoMarca extends Model
{
    //
    protected $table = 'producto_marca';

    protected $primaryKey = 'id_producto_marca';
    protected $fillable = [
        'id_producto',
        'id_marca',
        'estado_producto_marca'

    ];
}
