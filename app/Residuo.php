<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residuo extends Model
{
    protected $fillable = ['idResiduo', 'nombre', 'descripcion','clasificacion','idEmpresaResiduo'];
}
