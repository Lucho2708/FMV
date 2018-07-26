<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'foto'          => 'required|string',
            'nombres'       => 'required|string',
            'apellidos'     => 'required|string',
            'fecha_nacimiento' => 'required',
            'edad'          => 'required|numeric|max:100',
            'tipo_documento'=> 'required',
            'documento'     => 'required|numeric|max:10000000000',
            'genero'        => 'required|string',
            'ubicacion_id'  => 'required',
            'procedencia'   => 'required|string',
            'eps_id'        => 'required',
            'fecha_ingreso' => 'required',
            'estado_civil'  => 'required|string',
            'hijos'         => 'required|numeric|max:20',
            'alias'         => 'required|string',
            'senales'       => 'required|string',
            'rh'            => 'required|string',
            'estudios'      => 'required|string',

        ];
    }
}
