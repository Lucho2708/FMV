<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Intervencion extends Model
{
    //
    use Notifiable;
    protected $table = 'intervenciones';
    protected  $fillable = [
		'objetivo_general',
		'objetivo_espesifico',
		'tecnica',
    ];
}
