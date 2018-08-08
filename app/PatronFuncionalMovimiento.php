<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class PatronFuncionalMovimiento extends Model
{
    //use Notifiable;
    protected $table = 'patrones_funcionales_movimientos';
    protected  $fillable = [
	'mano_cabeza',
	'mano_boca',
	'mano_espalda',
	'mano_hombro',
	'mano_pierna',
	'mano_pie',
	'mano_cola',
	'mano_bilateral',
	'destreza_manual',
	'motricidad_gruesa',
	'motricidad_fina',
	'movimiento_bilateral',
	'coordinacion',
	'velocidad_desempeno',
	'observaciones'
    ];
}
