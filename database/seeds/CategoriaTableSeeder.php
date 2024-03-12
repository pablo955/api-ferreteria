<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
    		'descripcion_categoria' => 'Electricidad',
            'id_estado_categoria' => 1
    	]);

        DB::table('categorias')->insert([
    		'descripcion_categoria' => 'Plomeria',
            'id_estado_categoria' => 1
    	]);

        DB::table('categorias')->insert([
    		'descripcion_categoria' => 'Herramientas',
            'id_estado_categoria' => 1
    	]);

        DB::table('categorias')->insert([
    		'descripcion_categoria' => 'Construccion',
            'id_estado_categoria' => 1
    	]);

        DB::table('categorias')->insert([
    		'descripcion_categoria' => 'Pintureria',
            'id_estado_categoria' => 1
    	]);

        DB::table('categorias')->insert([
    		'descripcion_categoria' => 'Iluminacion',
            'id_estado_categoria' => 1
    	]);

        DB::table('categorias')->insert([
    		'descripcion_categoria' => 'Carpinteria',
            'id_estado_categoria' => 1
    	]);

        DB::table('categorias')->insert([
    		'descripcion_categoria' => 'Fijaciones',
            'id_estado_categoria' => 1
    	]);
    }
}
