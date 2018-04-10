<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Area_cognitiva extends Model
{
    use Notifiable;
    protected $table = 'area_cognitiva';
    public $timestamps = false;

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
