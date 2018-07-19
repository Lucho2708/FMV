<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Epicrisis_egreso extends Model
{
    use Notifiable;
    protected $table = 'epicrisis_egreso';
    public $timestamps = false;

    protected  $fillable = [
        'fecha',
        'incapacidades',
        'plan_mejora',
        'medicamentos',
        'estado_salud',
        'linea_pago',
        'servicio',
        'observaciones'
    ];
}
