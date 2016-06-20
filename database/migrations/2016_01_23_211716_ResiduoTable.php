<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResiduoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('residuos', function (Blueprint $table) {
              $table->increments('id');
              $table->string('idResiduo');
              $table->string('nombre')->unique();
              $table->string('descripcion');
              $table->string('clasificacion');
              $table->string('idEmpresaResiduo');
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
        Schema::drop('residuos');
    }
}
