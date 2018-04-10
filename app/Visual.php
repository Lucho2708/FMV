<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Visual extends Model
{
    use Notifiable;
    protected $table = 'visual';
    public $timestamps = false;

    protected  $fillable = [
        'agudes_visual',
        'campo_visual',
        'forma',
        'color',
        'tamano'
    ];
}
