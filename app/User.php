<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 
        'apellidos', 
        'documento',
        'tipo_documento', 
        'direccion',
        'telefono',
        'email',
        'usuario',
        'password',
        'avatar',
        'perfil',
    ];

    /** 
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function  pacientes(){
        return $this->hasMany('App\Paciente');
    }
    
}
