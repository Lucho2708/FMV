<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class AreaAvdb extends Model
{
    //
    use Notifiable;
    protected $table = 'areas_avdbs';
    protected  $fillable = [
		'alimentacion',
		'vestido',
		'higiene_mayor',
		'higiene_menor',
		'desplazamiento',
		'observacion'
    ];
}
