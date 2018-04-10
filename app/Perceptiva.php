<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Perceptiva extends Model
{
    use Notifiable;
    protected $table = 'perceptiva';
    public $timestamps = false;

    protected  $fillable = [

    ];
}
