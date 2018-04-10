<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use Notifiable;
    protected $table = 'ubicacion';
    public $timestamps = false;

    protected  $fillable = [
        'ciudad'
    ];
}
