<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAliadoSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliado_subcategoria', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cod_subcategoria')->unsigned();
            $table->bigInteger('cod_aliado')->unsigned();

            $table->integer('estado');

            $table->foreign('cod_subcategoria')
                ->references('id')
                ->on('subcategoria')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

                $table->foreign('cod_aliado')
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
        Schema::dropIfExists('aliado_subcategoria');
    }
}
