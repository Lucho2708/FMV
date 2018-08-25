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
        'email',
        'telefono',
        'email',
        'profesion',
        'empresa_labora',
        'parentesco'
    ]; 

    public function  pacientes(){
        return $this->hasMany('App\Paciente');
    }

    public function ubicacion(){
        return $this->belongsTo('App\Ubicacion');
    }

}
