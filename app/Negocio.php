<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $fillable = ['idSolicitud', 'idRespuesta','estado'];
}
