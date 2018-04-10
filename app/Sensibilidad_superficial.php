<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Sensibilidad_superficial extends Model
{
    use Notifiable;
    protected $table = 'sensibilidad_superficial';
    public $timestamps = false;

    protected  $fillable = [
        'calor',
        'frio',
        'dolor'
    ];
}
