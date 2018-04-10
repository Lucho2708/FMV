<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Patrones_integrales_movimiento extends Model
{
    use Notifiable;
    protected $table = 'patrones_integrales_movimiento';
    public $timestamps = false;

    protected  $fillable = [
        'alcance_plano_superior',
        'alcance_plano_inferior',
        'agarre_mano_llena',
        'agarre_cilindrp',
        'enganche',
        'salto_involuntario',
        'lanzar_proporcional',
        'lanzar_rudimentaria',
        'observaciones'
    ];
}
