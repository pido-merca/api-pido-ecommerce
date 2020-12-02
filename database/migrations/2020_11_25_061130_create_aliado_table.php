<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAliadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliado', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cod_plan')->unsigned();
            $table->bigInteger('cod_municipio')->unsigned();

            $table->string('nombre', 50);
            $table->string('slug')->unique();
            $table->string('camara_comercio', 40);
            $table->string('rut', 40);
            $table->string('telefono', 20);
            $table->string('correo', 50);
            $table->date('fecha_inscripcion');
            $table->string('imagen', 250);
            $table->string('hora_inicio');
            $table->string('hora_cierre');
            $table->integer('estado');

            $table->foreign('cod_plan')
                ->references('id')
                ->on('plan')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');
            
            $table->foreign('cod_municipio')
                ->references('id')
                ->on('municipio')
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
        Schema::dropIfExists('aliado');
    }
}
