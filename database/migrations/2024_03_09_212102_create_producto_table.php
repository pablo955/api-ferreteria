<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->unsignedInteger('id_categoria');
            $table->unsignedInteger('id_sector');
            $table->integer('codigo_producto');
            $table->string('nombre_producto');
            $table->integer('stock_producto');
            $table->double('precio_producto', 8, 2);
            $table->timestamp('fecha_alta_producto')->nullable();
            $table->timestamp('fecha_modificacion_producto')->nullable();
            $table->string('descripcion_producto');
            $table->double('descuento_producto', 8, 2)->nullable();
            $table->unsignedInteger('id_estado_producto');
            $table->integer('stock_minimo');
            $table->string('imagen');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->foreign('id_sector')->references('id_sector')->on('sector');
            $table->foreign('id_estado_producto')->references('id_estado_producto')->on('estado_producto');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
