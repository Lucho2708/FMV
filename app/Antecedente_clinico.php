<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Antecedente_clinico extends Model
{
    use Notifiable;
    protected $table = 'antecedente_clinico';
    public $timestamps = false;

    protected  $fillable = [
        'funcion_familiar',
        'motivo_consulta',
        'diagnostico',
        'definicion_problema',
        'hipotesis',
        'observacion'
    ];
}
