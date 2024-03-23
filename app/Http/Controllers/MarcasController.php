<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Marca;

class MarcasController extends Controller
{
    public function getMarcas(){
        $marcas = DB::table('marcas')
        ->select(
            'id_marca',
            'descripcion_marca'
            )
        ->orderBy('id_marca')
        ->get();

        return response()->json([
			'success' => true,
			'data' => $marcas,
			'status' => 200 
        ]);
    }
}
