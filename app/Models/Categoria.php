<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Producto;
use App\Models\EstadoCategoria;

class Categoria extends Model
{
    //
    protected $table = 'categorias';
  
    protected $primaryKey = 'id_categoria';
    protected $fillable = [
        'descripcion_categoria',
        'id_estado_categoria', 
        
    ];

    public function productos(){
       return $this->hasMany(Producto::class);
   }

   public function estadoCategoria(){
        return $this->belongsTo(EstadoCategoria::class);
    }
    
}
