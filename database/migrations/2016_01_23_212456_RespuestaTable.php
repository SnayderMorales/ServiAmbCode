<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('respuestas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('idRespuesta');
          $table->string('idEmpresa');
          $table->string('idSolicitud');
          $table->string('tipoRespuesta');
          $table->string('descripcion');
          $table->double('valor');
          $table->integer('estado');
          $table->rememberToken();
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
          Schema::drop('respuestas');
    }
}
