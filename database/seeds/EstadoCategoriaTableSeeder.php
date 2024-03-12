<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoCategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_categoria')->insert([
    		'descripcion_estado_categoria' => 'Activo',
    	]);

        DB::table('estado_categoria')->insert([
    		'descripcion_estado_categoria' => 'Inactivo',
    	]);
    }
}
