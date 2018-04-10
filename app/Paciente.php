<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use Notifiable;
    protected $table = 'paciente';
    public $timestamps = false;

    protected  $fillable = [
        'nombres',
        'apellidos',
        'documento',
        'tipo_documento',
        'procedencia',
        'fecha_nacimiento',
        'edad',
        'estado_civil',
        'hijos',
        'alias',
        'estudio',
        'genero',
        'rh',
        'senales',
        'foto'
    ];
}
