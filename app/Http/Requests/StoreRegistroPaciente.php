<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistroPaciente extends FormRequest
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
            'PNombres'          => '',
            'PApellidos'        => '',
            'PTipoDocumento'    => '',
            'PDocumento'        => '',
            'PAlias'            => '',
            'PFechaNacimiento'  => '',
            'PRh'               => '',
            'PGenero'           => '',
            'PEstudios'         => '',
            'PEstadoCivil'      => '',
            'PHijos'            => '',
            'PObservacion'      => '',
            'ANombres'          => '',
            'AApellidos'        => '',
            'ATipoDocumento'    => '',
            'ADocumento'        => '',
            'PUbicacion'        => '',
            'ADireccion'        => '',
            'ATelefono'         => '',
            'AProfesion'        => '',
            'AEmpresaLabora'    => '',
            'AParentesco'       => ''
        ];
    }
}
