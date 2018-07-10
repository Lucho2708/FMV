<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioUpdateRequest extends FormRequest
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
            'documento'     => 'required|numeric|max:10',
            'tipo_documento'=> 'required',
            'dirrecion'     => 'required|string',
            'telefono'      => 'required|numeric|size:11',
            'email'         => 'required|string|email|max:255|unique:users',
            'usuario'       => 'required|string|unique:users',
            'password'      => 'required|string|min:6|confirmed',
            'perfil'        => 'required',
        ];
    }
}
