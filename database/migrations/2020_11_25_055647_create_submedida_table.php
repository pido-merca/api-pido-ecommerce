<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submedida', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cod_medida')->unsigned();

            $table->string('nom_submedida', 50);

            $table->foreign('cod_medida')
                ->references('id')
                ->on('medida')
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
        Schema::dropIfExists('submedida');
    }
}
