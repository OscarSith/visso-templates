<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marca_id')->unsigned();
            $table->string('cat_nombre');
            $table->string('cat_imagen');
            $table->tinyInteger('cat_estado')->default(1);
            $table->tinyInteger('cat_sub');
            $table->tinyInteger('cat_parent');
            $table->tinyInteger('cat_detalle');
            $table->tinyInteger('cat_sub_nivel');
            $table->integer('product_id')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categorias');
    }
}
