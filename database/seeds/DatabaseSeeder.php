<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
        	EstadoCategoriaTableSeeder::class,
        	SectorTableSeeder::class,
        	CategoriaTableSeeder::class,
            MarcaTableSeeder::class
        ]);
        // $this->call(SectorTableSeeder::class);
        // $this->call(CategoriaTableSeeder::class);
    }
}
