<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class CierreProceso extends Model
{
    //
    use Notifiable;
    protected $table = 'cierres_procesos';
    protected  $fillable = [
    	'cumplimiento',
		'cierre_semestral',
		'consultante',
		'psicologico',
		'otros'
    ];
}
