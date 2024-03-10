<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Producto;

class EstadoProducto extends Model
{
    //
    protected $table = 'estado_producto';
  
    protected $primaryKey = 'id_estado_producto';
    protected $fillable = [
        'descripcion_estado_producto', 
    ];

    public function productos(){
       return $this->hasMany(Producto::class);
   }
}
