<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Seguimiento_proceso extends Model
{
    use Notifiable;
    protected $table = 'seguimiento_proceso';
    public $timestamps = false;

    protected  $fillable = [
        'no_hc',
        'fecha',
        'no_sesion',
        'asistentes',
        'resumen',
        'hipotesis',
        'compromiso'
    ];
}

