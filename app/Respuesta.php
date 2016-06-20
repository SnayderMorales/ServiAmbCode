<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $fillable = ['idRespuesta', 'tipoRespuesta', 'descripcion','valor','idEmpresa','idSolicitud'];
}
