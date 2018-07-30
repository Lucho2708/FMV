<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RpsicologicaUpdateRequest extends FormRequest
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
            'fecha' => 'required',
            'nombres'       => 'required|string',
            'apellidos' => 'required|string',
            'genero'        => 'required|string',
            'edad'          => 'required|numeric|max:100',
            'documento'     => 'required|numeric|max:10000000000',
            'fecha_nacimiento' => 'required',
            'nombre'      => 'required|string',
            'tipo_documento' => 'required',
            'estudios' => 'required|string',
            'estado_civil' => 'required|string',
            'dirrecion'=> 'required|string',
            'telefono'      => 'required|numeric|size:100000000',
            'descripcion'  => 'required|string',
            'motivo_remision'       => 'required|string',
            'recomendaciones'  => 'required|string',
        ];
    }
}
