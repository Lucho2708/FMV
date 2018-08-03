<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EigresoStoreResquest extends FormRequest
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
            'fecha'             => 'required',
            'nombres'       => 'required|string',
            'apellidos'     => 'required|string',
            'documento' => 'required|numeric|100000000',
            'genero'        => 'required|string',
            'edad'          => 'required|numeric|max:100',
            'linea_pago'        => 'required',
            'servicio'          => 'required|string',
            'motivo_consulta'   => 'required|string',
            'emfermedad_actual' => 'required|string',
            'Conducta'=> 'required|string',
            'evolucion'=> 'required|string',
            'patologia'=> 'required|string',
            'quirurjicos'=> 'required|string',
            'toxicos'=> 'required|string',
            'farmacologicos'=> 'required|string',
            'inmunisacion'=> 'required|string',
            'transfusion'=> 'required|string',
            'ginecobstetricios'=> 'required|string',
            'menarquias'=> 'required|string',
            'ciclos'=> 'required|string',
            'regular'=> 'required',
            'planificacion_ets'=> 'required',
            'patologia_embarazo_actual'=> 'required|string',
            'patologia_embarazo_anterior'=> 'required|string',
            'otros'=> 'required|string',
            'familiares'=> 'required|string',
            't_a'=> 'required|string',
            'f_c'=> 'required|string',
            'f_r'=> 'required|string',
            'temp'=> 'required|string',
            'peso'=> 'required|string',
            'glasglow'=> 'required|string',
            'talla'=> 'required|string',
            'sato2'=> 'required|string',

        ];
    }
}
