<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Paciente extends Model
{
    //
    use Notifiable;
    protected $table = 'pacientes';
    protected  $fillable = [
		'nombres',
		'apellidos',
		'tipo_documento',
		'fecha_nacimiento',
		'estado_civil',
		'hijos',
		'estudios',
		'genero',
		'rh',
		'senales'
    ];
}
