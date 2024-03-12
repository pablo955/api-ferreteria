<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('marcas')->insert([
    		'descripcion_marca' => 'Marca 1',
    	]);

        DB::table('marcas')->insert([
    		'descripcion_marca' => 'Marca 2',
    	]);

        DB::table('marcas')->insert([
    		'descripcion_marca' => 'Marca 3',
    	]);

        DB::table('marcas')->insert([
    		'descripcion_marca' => 'Marca 6',
    	]);

        DB::table('marcas')->insert([
    		'descripcion_marca' => 'Marca 7',
    	]);

        DB::table('marcas')->insert([
    		'descripcion_marca' => 'Marca 8',
    	]);
    }
}
