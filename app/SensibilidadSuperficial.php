<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class SensibilidadSuperficial extends Model
{
    //
    use Notifiable;
    protected $table = 'sensibilidades_superficiales';
    protected  $fillable = [
		'calor',
		'frio',
		'dolor'
    ];
}
