<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SprocesoUpdateRequest extends FormRequest
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
            'no_hc'         => 'required|numeric|max:10000000',
            'fecha'         => 'required',
            'no_sesion'     => 'required|numeric|max:10000000',
            'asistentes'  => 'required|string',
            'objectivo_trabajar' => 'required|string',
            'resumen'         => 'required|string',
            'hipotesis'        => 'required|string',
            'tarea'        => 'required|string',
        ];
    }
}
