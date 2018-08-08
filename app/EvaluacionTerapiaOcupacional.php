<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class EvaluacionTerapiaOcupacional extends Model
{
    //
    use Notifiable;
    protected $table = 'evaluaciones_terapias_ocupacionales';
    protected  $fillable = [
		'emfermedad_actual',
		'emfermedad_natural'
    ];
}
