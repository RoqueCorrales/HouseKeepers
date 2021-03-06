<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('user_id_receive')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id_receive')->references('id')->on('users');
            $table->date('ingreso')->nullable(); 
            $table->longText('comentario');
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
        Schema::dropIfExists('comentarios');
    }
}
