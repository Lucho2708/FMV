<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Sensibilidad_profunda extends Model
{
    use Notifiable;
    protected $table = 'sensibilidad_profunda';
    public $timestamps = false;

    protected  $fillable = [
        'barognosia',
        'esterognosia',
        'diferenciacion_texturas',
        'grafestesia'
    ];
}
}
