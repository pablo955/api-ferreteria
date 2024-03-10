<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Categoria;

class EstadoCategoria extends Model
{
    protected $table = 'estado_categoria';
  
    protected $primaryKey = 'id_estado_categoria';
    protected $fillable = [
        'descripcion_estado_categoria', 
    ];

    public function categorias(){
       return $this->hasMany(Categoria::class);
   }
}
