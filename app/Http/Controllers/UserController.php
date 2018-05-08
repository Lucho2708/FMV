<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;
use Auth;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = 1;
        $usuario =User::all();
        return view('admin.usuarios.listar-usuario',compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.crear-usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $usuario = new User($request->all());

        $usuario -> password=bcrypt($request->password);
        $usuario -> perfil=($request->perfil);
        $usuario -> save();

        alert()->success('El registro fue creado exitosamente.','En hora buena')->autoclose(3000);
        return redirect('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=User::find($id);

        return view('admin.usuarios.editar-usuario',compact('usuario'));
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
        $usuario=User::find($id);
        //dd($usuario);
        $usuario->fill($request->all());
        $usuario->save();
        Session::flash('message','El usuario: '.$usuario->nombres .' '.$usuario->apellidos.' fue actualizado exitosamente');
        return redirect('usuario');
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

    public function perfil()
    {
        return view('admin.perfil.perfil', array('user'=>Auth::user()));

    }

    public function update_avatar(Request $request){
        

        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('images/'.$filename));
            $user= Auth::user();
            $user->fill($request->all());
            $user ->avatar=$filename;
            $user ->save();   
        }else{
            $user= Auth::user();
            $user->fill($request->all());
            $user->save();

        }
        
        alert()->success('Su perfil fue actualizado exitosamente')->autoclose(2000);
        
        return view('admin.perfil.perfil',array ('user'=>Auth::user()));

    }
}
