<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['idEmpresa', 'nit', 'nombre','razonSocial','idEmpresaResiduo','gestor','vendedor','comprador'];
}
