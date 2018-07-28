<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CprocesoUpdateResquest extends FormRequest
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
            'cumplimiento'  => 'required|string',
            'cierre_semestral' => 'required|string',
            'otros'         => 'required|string',
            'e_p_c'         => 'required|string',
            'e_p_p'         => 'required|string',
        ];
    }
}
