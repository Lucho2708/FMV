<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class EpicrisiEgreso extends Model
{
    //
    use Notifiable;
    protected $table = 'epicrisis_egresos';
    protected  $fillable = [
    	'linea_pago',
		'incapacidades',
		'plan_mejora',
		'medicamentos',
		'estado_salud',
		'servicio',
		'observaciones'
    ];
}
