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
        'fecha',
        'asistentes',
        'resumen',
        'hipotesis',
        'compromiso'
    ];
}
}
