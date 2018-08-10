<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Acudiente extends Model
{
	use Notifiable;
    protected $table = 'acudientes';
    protected  $fillable = [
        'nombres',
        'apellidos',
        'documento',
        'tipo_documento',
        'direccion',
        'telefono',
        'profesion',
        'empresa_labora',
        'parentesco'
    ]; 
}
