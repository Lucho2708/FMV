<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Centro_rehabilitacion extends Model
{
    use Notifiable;
    protected $table = 'centro_rehabilitacion';
    public $timestamps = false;

    protected  $fillable = [
        'nombre_centro'
    ];
}
