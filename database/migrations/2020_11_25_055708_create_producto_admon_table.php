<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoAdmonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_admon', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cod_marca')->unsigned();
            $table->bigInteger('cod_categoria')->unsigned();
            $table->bigInteger('cod_submedida')->unsigned();

            $table->string('nombre', 100);
            $table->string('descripcion', 100);
            $table->string('imagen', 250);

            $table->foreign('cod_marca')
                ->references('id')
                ->on('marca')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('cod_categoria')
                ->references('id')
                ->on('categoria')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('cod_submedida')
                ->references('id')
                ->on('submedida')
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
        Schema::dropIfExists('producto_admon');
    }
}
