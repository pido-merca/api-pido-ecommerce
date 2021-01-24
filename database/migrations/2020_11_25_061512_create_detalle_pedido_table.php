<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cod_pedido')->unsigned();
            $table->bigInteger('cod_producto_aliado')->unsigned();
            
            $table->integer('cantidad');
            $table->integer('precio');

            $table->foreign('cod_pedido')
                ->references('id')
                ->on('pedido')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

                $table->foreign('cod_producto_aliado')
                ->references('id')
                ->on('producto_aliado')
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
        Schema::dropIfExists('detalle_pedido');
    }
}
