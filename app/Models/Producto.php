<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Sector;

class Producto extends Model
{
    //

    protected $table = 'productos';

    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'id_categoria',
        'id_sector',
        'codigo_producto',
        'nombre_producto',
        'stock_producto',
        'precio_producto',
        'fecha_alta_producto',
        'fecha_modificacion_producto',
        'descripcion_producto',
        'descuento_producto',
        'id_estado_producto',
        'stock_minimo',
        'imagen'
    ];

    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }

    public function sector(){
        return $this->belongsTo(Sector::class);
    }

}
