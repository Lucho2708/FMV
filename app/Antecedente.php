<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    use Notifiable;
    protected $table = 'antecedentes';
    protected  $fillable = [
    	'patologicos',
		'quirurjicos',
		'toxicos',
		'farmacologicos',
		'inmunisacion',
		'transfusion',
		'ginecobstetricios',
		'menarquias',
		'ciclos',
		'regular',
		'planificacion_ets',
		'patologia_embarazo_actual',
		'patologia_embarazo_anterior',
		'otros',
		'familiares',
		't_a',
		'f_c',
		'f_r',
		'temp',
		'peso',
		'glasglow',
		'talla',
		'sato'
    ];
}
