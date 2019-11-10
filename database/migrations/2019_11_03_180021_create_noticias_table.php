<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo-not');
            $table->text('corpo-not');
            $table->string('image');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('jornal_id')->unsigned();
            $table->foreign('jornal_id')->references('id')->on('jornals');
            $table->bigInteger('seccao_id')->unsigned();
            $table->foreign('seccao_id')->references('id')->on('seccaos');
            $table->bigInteger('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');
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
        Schema::dropIfExists('noticias');
    }
}
