<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class AntecedenteClinico extends Model
{
    use Notifiable;
    protected $table = 'antecedentes_clinicos';
    protected  $fillable = [
    	'familiar',
		'consulta',
		'diagnostico',
		'problema',
		'hipotesis',
		'observacion'
    ];
}
