<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visual extends Model
{
    use Notifiable;
    protected $table = 'visuales';
    protected  $fillable = [
	'agudes_visual',
	'campo_visual',
	'forma',
	'color',
	'tamano'
    ];
}
