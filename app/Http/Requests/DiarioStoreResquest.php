<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiarioStoreResquest extends FormRequest
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
            'titulo_dia' => 'required|string',
            'cronica' => 'required|string',
            'estado_inicial' => 'required|string',
            'estado_final' => 'required|string',
            'experiencias_negativas' => 'required|string',
            'experiencias_positivas' => 'required|string',
            'compromiso'  => 'required|string',
        ];
    }
}
