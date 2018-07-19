<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Cierre_proceso extends Model
{
    use Notifiable;
    protected $table = 'cierre_proceso';
    public $timestamps = false;

    protected  $fillable = [
        'no_hc',
        'fecha',
        'no_sesion',
        'cumplimiento',
        'cierre_semestral',
        'otros',
        'e_p_c',
        'e_p_p'
    ];
}
