<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('solicitudes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('idSolicitud');
          $table->string('tipoSolicitud');
          $table->string('tipoResiduo');
          $table->string('titulo');
          $table->double('cantidad');
          $table->string('unidad');
          $table->string('descripcion');
          $table->string('idEmpresa');
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
        Schema::drop('solicitudes');
    }
}
