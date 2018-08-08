<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class CentroRehabilitacion extends Model
{
    //
    use Notifiable;
    protected $table = 'centros_rehabilitacion';
    protected  $fillable = [
		'nombre'
    ];
}
