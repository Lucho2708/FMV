<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EegresoStoreResquest extends FormRequest
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
            'fecha'         => 'required',
            'nombres'       => 'required|string',
            'apellidos'     => 'required|string',
            'genero'        => 'required|string',
            'edad'          => 'required|numeric|max:100',
            'linea_pago'    => 'required',
            'servicio'      => 'required|string',
            'incapacidad'   => 'required|string',
            'estado_salud'  => 'required',
            'plan_mejora'   => 'required|string',
            'medicamentos'  => 'required|string',
        ];
    }
}
