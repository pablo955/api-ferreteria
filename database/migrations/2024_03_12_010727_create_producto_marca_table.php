<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoMarcaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_marca', function (Blueprint $table) {
            $table->increments('id_producto_marca');
            $table->unsignedInteger('id_producto');
            $table->unsignedInteger('id_marca');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_marca')->references('id_marca')->on('marcas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_marca');
    }
}
