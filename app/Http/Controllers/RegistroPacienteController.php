<?php

namespace App\Http\Controllers;
use App\User;
use App\Eps;
use App\Paciente;
use App\Acudiente;
use App\Ubicacion;
use App\CentroRehabilitacion;
use App\Http\Requests\StoreRegistroPaciente;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class RegistroPacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $Pubicacion = Ubicacion::all();
        $Aubicacion = Ubicacion::all();
        $eps = Eps::all();
        return view('formulario.registro-paciente.crear',compact('Pubicacion','Aubicacion','eps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistroPaciente $request)
    {
        
        $registro = $request->validated();
        $user = Auth::user();
        $acudiente= new Acudiente([
            'nombres' =>$registro['ANombres'],
            'apellidos' =>$registro['AApellidos'],
            'documento' =>$registro['ADocumento'],
            'tipo_documento' =>$registro['ATipoDocumento'],
            'direccion' =>$registro['ADireccion'],
            'email' =>'emai@com.es',
            'telefono' =>$registro['ATelefono'],
            'profesion' =>$registro['AProfesion'],
            'empresa_labora' =>$registro['AEmpresaLabora'],
            'parentesco' =>$registro['AParentesco'],
        ]);        
        $acudiente->save();

        $ADocumento = (int)$registro['ADocumento'];

        $acudienteFind = Acudiente::where('documento',$ADocumento)->firstOrFail();

        $paciente = new Paciente([

            'nombres'   =>  $registro['PNombres'] ,
            'apellidos' =>  $registro['PApellidos'],
            'tipo_documento'=>$registro['PTipoDocumento'],
            'documento' => $registro['PDocumento'],
            'alias' => $registro['PAlias'],
            'fecha_nacimiento' =>$registro['PFechaNacimiento'],
            'rh' => $registro['PRh'],
            'genero'=>$registro['PGenero'],
            'estudios'=>$registro['PEstudios'],
            'estado_civil'=>$registro['PEstadoCivil'],
            'hijos'=>$registro['PHijos'],
            'senales'=>$registro['PObservacion'],
        ]);

        $paciente->user()->associate(Auth::user());
        $paciente->acudiente()->associate($acudiente);

        $paciente->save();       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
