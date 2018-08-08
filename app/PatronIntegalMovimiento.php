<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class PatronIntegalMovimiento extends Model
{
    //
    use Notifiable;
    protected $table = 'patrones_integrales_movimientos';
    protected  $fillable = [
		'alcance_plano_superior',
		'alcance_plano_inferior',
		'agarre_mano_llena',
		'agarre_cilindro',
		'enganche',
		'salto_involuntario',
		'lanzar_proporcional',
		'lanzar_rudimentaria',
		'observaciones'
    ];
}
