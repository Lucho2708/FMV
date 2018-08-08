<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Auditiva extends Model
{
    //
    use Notifiable;
    protected $table = 'auditivas';
    protected  $fillable = [
    	'fuerte',
		'leve',
		'vibrante'
    ];
}
