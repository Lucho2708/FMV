<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class EpicrisiIngreso extends Model
{
    //
    use Notifiable;
    protected $table = 'epicrisis_ingresos';
    protected  $fillable = [
		'linea_pago',
		'servicio',
		'consulta',
		'enfermedad',
		'conducta',
		'evolucion'
    ];
}
