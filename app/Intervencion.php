<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Intervencion extends Model
{
    use Notifiable;
    protected $table = 'intervencion';
    public $timestamps = false;

    protected  $fillable = [
        'objetivo_general',
        'objetivo_especifico',
        'tecnica'
    ];
}
}
