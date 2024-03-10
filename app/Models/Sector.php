<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Producto;

class Sector extends Model
{
    //
    protected $table = 'sector';
  
    protected $primaryKey = 'id_sector';
    protected $fillable = [
        'descripcion_sector', 
    ];

    public function productos(){
       return $this->hasMany(Producto::class);
   }
}
