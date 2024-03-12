<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function getCategorias(){
        $categorias = DB::table('categorias')
        ->select('categorias.*', 'estado_categoria.descripcion_estado_categoria as descripcion_estado_categoria')
        ->join('estado_categoria', 'categorias.id_estado_categoria', '=', 'estado_categoria.id_estado_categoria')
        ->get();

        return response()->json([
            'success' => true,
            'data' => $categorias,
            'status' => 200
        ]);
    }
}
