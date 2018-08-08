<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class DiarioTerapeutico extends Model
{
    //
    use Notifiable;
    protected $table = 'diarios_terapeuticos';
    protected  $fillable = [
		'titulo',
		'cronica',
		'estado_inicial',
		'estado_final',
		'experiencias_positivas',
		'experiencias_negativas',
		'compromiso'
    ];
}
