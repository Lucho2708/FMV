<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model
{
    use Notifiable;
    protected $table = 'acudiente';
    public $timestamps = false;

    protected  $fillable = [
        'documento',
        'tipo_documento',
        'nombres',
        'apellidos',
        'dirrecion',
        'telefono',
        'profesion',
        'empresa_labora',
        'parentesco'
    ];
}
