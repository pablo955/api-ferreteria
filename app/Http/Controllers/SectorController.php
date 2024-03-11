<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Sector;

class SectorController extends Controller
{
    public function getSectores(){
        $sectores = DB::table('sector')
        ->select(
            'id_sector',
            'descripcion_sector'
            )
        ->orderBy('id_sector')
        ->get();

        return response()->json([
			'success' => true,
			'data' => $sectores,
			'status' => 200 
        ]);
    }
}
