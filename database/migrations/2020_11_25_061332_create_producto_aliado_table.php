<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoAliadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_aliado', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cod_producto_admon')->unsigned();
            $table->bigInteger('id_aliado')->unsigned();

            $table->double('cantidad');
            $table->double('preciosubmedida');
            $table->integer('stockminimo');
            $table->integer('estado');

            $table->foreign('cod_producto_admon')
                ->references('id')
                ->on('producto_admon')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

                $table->foreign('id_aliado')
                ->references('id')
                ->on('aliado')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');
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
        Schema::dropIfExists('producto_aliado');
    }
}
