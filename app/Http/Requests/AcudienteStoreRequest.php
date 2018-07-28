<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcudienteStoreRequest extends FormRequest
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
            'nombres'       => 'required|string',
            'apellidos'     => 'required|string',
            'tipo_documento'=> 'required|string',
            'documento'     => 'required|numeric|max:1000000000',
            'dirrecion'     => 'required|string',
            'ciudad'        => 'required|string',
            'telefono'      => 'required|numeric|size:100000000',
            'profesion'     => 'required|string',
            'empresa_labora'=> 'required|string',
            'parentesco'    => 'required',
            'nombre'        => 'required',
            'aporte'        => 'required|string',
        ];
    }
}
