<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Ubicacion extends Model
{
    //
    use Notifiable;
    protected $table = 'ubicaciones';
    protected  $fillable = [
    	'ciudad'
    ];

    public function  pacientes(){
        return $this->hasOne('App\Paciente');
    }
}
