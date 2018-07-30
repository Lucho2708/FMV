<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HcUpdateRequest extends FormRequest
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
            'numero'        => 'required|string',
            'fecha'         => 'required',
            'nombres'       => 'required|string',
            'apellidos'     => 'required|string',
            'documento'     => 'required|numeric|max:10000000000',
            'parentesco'    => 'required',
            'tipo_documento'=> 'required',
            'genero'        => 'required|string',
            'edad'          => 'required|numeric|max:100',
            'estado_civil'  => 'required|string',
            'fecha_nacimiento' => 'required',
            'procedencia'   => 'required|string',
            'dirrecion'     => 'required|string',
            'nombre'        => 'required|string',
            'telefono'      => 'required|numeric|size:100000000',
            'estudios'      => 'required|string',
            'genograma'     => 'required|file',
            'funcionamiento_familiar' => 'required|string',
            'motivo_consulta' => 'required|string',
            'diagnostico'     => 'required|string',
            'definicion_problema'  => 'required|string',
            'hipotesis'      => 'required|string',
            'objectivo_general' => 'required|string',
            'objectivo_especifico' => 'required|string',
            'tecnica'        => 'required|string',
            'observaciones'   => 'required|string',
        ];
    }
}
