<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Evaluacion_terapia_ocupacional extends Model
{
    use Notifiable;
    protected $table = 'evaluacion_terapia_ocupacional';
    public $timestamps = false;

    protected  $fillable = [
        'emfermedad_actual',
        'emfermedad_natural'
    ];
}
