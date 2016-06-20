<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('empresas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('idEmpresa');
          $table->string('nit')->unique();
          $table->string('nombre')->unique();
          $table->string('razonSocial');
          $table->string('idEmpresaResiduo');
          $table->string('gestor');
          $table->string('vendedor');
          $table->string('comprador');
          $table->string('telefono',15);
          $table->string('direccion',60);
          $table->string('camara');
          $table->string('hash');
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
        Schema::drop('empresas');
    }
}
