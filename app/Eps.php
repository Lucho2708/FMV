<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    //
    public $timestamps = false;
    use Notifiable;
    protected $table = 'eps';
    protected  $fillable = [
    	'eps'
    ];
    public function  pacientes(){
        return $this->hasOne('App\Paciente');
    }
}
