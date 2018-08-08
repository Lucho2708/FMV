<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class SensibilidadProfunda extends Model
{
    //
    use Notifiable;
    protected $table = 'sensibilidades_profundas';
    protected  $fillable = [
		'barognosia',
		'esterognosia',
		'diferenciacion_texturas',
		'grafestesia'
    ];
}
