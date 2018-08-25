<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;
class Paciente extends Model
{
    //
    use Notifiable;
    protected $table = 'pacientes';
    protected  $fillable = [
		'nombres',
		'apellidos',
		'tipo_documento',
		'documento',
		'fecha_nacimiento',
		'estado_civil',
		'hijos',
		'alias',
		'estudios',
		'genero',
		'rh',
		'senales',
        'avatar'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

	public function acudiente(){
    	return $this->belongsTo('App\Acudiente');
    }
    public function eps(){
    	return $this->belongsTo('App\Eps');
    }
    public function ubicacion(){
    	return $this->belongsTo('App\Ubicacion');
    }

    public function setFotoAttribute($foto)
    {
        $this->attributes['foto'] = Carbon::now()->day.$foto;
        $name = Carbon::now()->day.$foto;
        \Storage::disk('local')->put($name, \File::get($foto));
    }

}
