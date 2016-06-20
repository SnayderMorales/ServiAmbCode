<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';


    protected $fillable = ['idSolicitud', 'tipoSolicitud', 'tipoResiduo','descripcion','titulo','cantidad','unidad','idEmpresa'];
}
