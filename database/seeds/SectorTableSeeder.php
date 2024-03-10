<?php

use Illuminate\Database\Seeder;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('sector')->insert([
    		'descripcion_sector' => '1° estante',
    	]);

    	DB::table('sector')->insert([
    		'descripcion_sector' => '2° estante',
    	]);

        DB::table('sector')->insert([
    		'descripcion_sector' => '3° estante',
    	]);
    }
}
