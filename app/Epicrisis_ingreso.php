<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Epicrisis_ingreso extends Model
{
    use Notifiable;
    protected $table = 'epicrisis_ingreso';
    public $timestamps = false;

    protected  $fillable = [
        'fecha',
        'motivo_consulta',
        'emfermedad_actual'
    ];
}
