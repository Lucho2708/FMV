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
        
        $ubicacion = Ubicacion::all();
        $eps = Eps::all();
        return view('formulario.registro-paciente.crear',compact('ubicacion','eps'));
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
        $acudiente= Acudiente::find(34);
        
        /**
        $paciente = Paciente::create(
            [
                'nombres'   =>  $Vpaciente['PNombres'] ,
                'apellidos' =>  $Vpaciente['PApellidos'],
                'tipo_documento'=>$Vpaciente['PTipoDocumento'],
                'documento' => $Vpaciente['PDocumento'],
                'alias' => $Vpaciente['PAlias'],
                'fecha_nacimiento' =>$Vpaciente['PFechaNacimiento'],
                'rh' => $Vpaciente['PRh'],
                'genero'=>$Vpaciente['PGenero'],
                'estudios'=>$Vpaciente['PEstudios'],
                'estado_civil'=>$Vpaciente['PEstadoCivil'],
                'hijos'=>$Vpaciente['PHijos'],
                'senales'=>$Vpaciente['PObservacion'],


            ]
        );
        **/
        /**$acudiente = new Acudiente([
            'nombres'=>$registro['ANombres'],
            'apellidos'=>$registro['AApellidos'],
            'documento'=>$registro['ADocumento'],
            'tipo_documento'=>$registro['ATipoDocumento'],
            'direccion'=>$registro['ADireccion'],
            'telefono'=>$registro['ATelefono'],
            'profecion'=>$registro['AProfesion'],
            'email'=>$registro['AProfesion'],
            'empresa_labora'=>$registro['AEmpresaLabora'],
            'parentesco'=>$registro['AParentesco']
        ]);
        $acudiente->save();**/  
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
        $acudiente->pacientes()->append($paciente);

        $user->pacientes()->append($paciente);

        //$user->pacientes()->save($paciente);

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
