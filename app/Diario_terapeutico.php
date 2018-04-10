<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Diario_terapeutico extends Model
{
    use Notifiable;
    protected $table = 'diario_terapeutico';
    public $timestamps = false;

    protected  $fillable = [
        'fecha',
        'titulo_dia',
        'cronica',
        'estado_inicial',
        'estado_final',
        'experiencias_negativas',
        'experiencias_positivas',
        'compromiso'
    ];
}
