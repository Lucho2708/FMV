<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    use Notifiable;
    protected $table = 'antecedente';
    public $timestamps = false;

    protected  $fillable = [
        'patologia',
        'quirurjicos',
        'toxicos',
        'farmacologicos',
        'inmunisacion'
    ];
}
