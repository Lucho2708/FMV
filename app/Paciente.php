<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'estudios',
        'genero',
        'rh',
        'senales',
        'foto'
    ];

    public function setFotoAttribute($foto)
    {
        $this->attributes['foto'] = Carbon::now()->day.$foto->getClientOriginalName();
        $name = Carbon::now()->day.$foto->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($foto));
    }
}

