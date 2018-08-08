<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class SeguimientoProceso extends Model
{
    //
    use Notifiable;
    protected $table = 'seguimientos_procesos';
    protected  $fillable = [
		'asistentes',
		'resumen',
		'hipotesis',
		'compromiso'
    ];
}
