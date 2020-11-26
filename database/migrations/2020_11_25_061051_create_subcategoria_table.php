<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategoria', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cod_categoria')->unsigned();

            $table->string('nombre_subcategoria', 50);
            $table->string('slug')->UNIQUE();
            $table->integer('estado');

            $table->foreign('cod_categoria')
                ->references('id')
                ->on('categoria')
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
        Schema::dropIfExists('subcategoria');
    }
}