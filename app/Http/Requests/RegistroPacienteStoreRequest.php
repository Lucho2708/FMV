<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroPacienteStoreRequest extends FormRequest
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
            'PNombres'          => 'required|string',
            'PApellidos'        => 'required|string',
            'PTipoDocumento'    => 'required|string',
            'PDocumento'        => 'required|numeric|max:1000000000',
            'PAlias'            => 'required|string',
            'PFechaNacimiento'  => 'required',
            'PRh'               => 'required|string',
            'PGenero'           => 'required|string',
            'PEstudios'         => 'required|string',
            'PEstadoCivil'      => 'required|string',
            'PHijos'            => 'required|numeric|max:20',
            'PObservacion'      => 'required|string',
            'ANombres'          => 'required|string',
            'AApellidos'        => 'required|string',
            'ATipoDocumento'    => 'required|string',
            'ADocumento'        => 'required|numeric|max:1000000000',
            'PUbicacion'        => 'required',
            'ADireccion'        => 'required|string',
            'ATelefono'         => 'required|numeric|size:100000000',
            'AEmail'            => 'required|string|email|max:100|unique:acudiente',
            'AProfesion'        => 'required|string',
            'AEmpresaLabora'    => 'required|string',
            'AParentesco'       => 'required',
        ];
    }
}
