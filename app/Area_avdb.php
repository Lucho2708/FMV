<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Area_avdb extends Model
{
    use Notifiable;
    protected $table = 'area_avdb';
    public $timestamps = false;

    protected  $fillable = [
        'alimentacion',
        'vestido',
        'higiene_mayor',
        'higiene_menor',
        'desplazamiento',
        'observacion'
    ];
}
