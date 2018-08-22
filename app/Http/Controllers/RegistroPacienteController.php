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
use Illuminate\Support\Facades\DB;



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
        
        return view('formulario.registro-paciente.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $Pubicacion = Ubicacion::all();
        $Aubicacion = $Pubicacion;
        $Peps = Eps::all();
        return view('formulario.registro-paciente.crear',compact('Pubicacion','Aubicacion','Peps'));
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
        
        $AUbicacionFind = Ubicacion::findOrFail($request['AUbicacion']);
        $PUbicacionFind = Ubicacion::findOrFail($request['PUbicacion']);
        $PEpsFind = Eps::findOrFail($request['PEps']);

       
        

        DB::transaction(function () use ($registro, $AUbicacionFind, $PUbicacionFind, $PEpsFind){

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

        $acudiente->ubicacion()->associate($AUbicacionFind);

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
            'foto'=>'\user.png',
            'senales'=>$registro['PObservacion'],
        ]);

        

        $paciente->ubicacion()->associate($PUbicacionFind);
        $paciente->eps()->associate($PEpsFind);
        $paciente->user()->associate(Auth::user());
        $paciente->acudiente()->associate($acudienteFind);
        
        $paciente->save(); 



        });    


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
