<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    use Notifiable;
    protected $table = 'eps';
    public $timestamps = false;

    protected  $fillable = [
        'nombre'
    ];
}
