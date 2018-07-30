<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HingresoUpdateRequest extends FormRequest
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
            'fecha_consulta' => 'required',
            'nombres'       => 'required|string',
            'apellidos' => 'required|string',
            'documento'     => 'required|numeric|max:10000000000',
            'fecha_nacimiento' => 'required',
            'edad'          => 'required|numeric|max:100',
            'nombre'      => 'required|string',
            'dirrecion'=> 'required|string',
            'telefono'      => 'required|numeric|size:100000000',
            'genero'        => 'required|string',
            'parentesco' => 'required|string',
            'motivo_consulta'        => 'required|string',
            'observaciones'       => 'required|string',
        ];
    }
}
