<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class AreaCognitiva extends Model
{
    //
    use Notifiable;
    protected $table = 'areas_cognitivas';
    protected  $fillable = [
		'vision',
		'nivel_atencion',
		'concentracion',
		'habilidad_solucionar_problemas',
		'creatividad',
		'iniciativa',
		'competencia',
		'interpretacion',
		'planeacion',
		'observaciones'
    ];
}
