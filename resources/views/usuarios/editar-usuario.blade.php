@extends('layouts.app')

@section('title')
FMV | Editar Usuario
@endsection

@section('css')
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    VER USUARIOS
                </h2>
            </div>
            <div class="body">
                {!! Form::open(['route' => ['usuario.update',$usuario], 'method' => 'PUT']) !!}

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}">
                                <div @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                    <input type="text" class="form-control" name="nombres" value="{{$usuario->nombres}}" placeholder="Nombres" required>
                                </div>
                                @if ($errors->has('nombres'))
                                    <label class="error">{{ $errors->first('nombres') }}</label>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group {{ $errors->has('apellidos') ? ' has-error' : '' }}">
                                <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                    <input type="text" class="form-control" name="apellidos" value="{{$usuario->apellidos}}" placeholder="Apellidos" required>
                                </div>
                                @if ($errors->has('apellidos'))
                                    <label class="error">{{ $errors->first('apellidos') }}</label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control show-tick" name="tipo_documento" required>
                                    <option value="">-- Tipo de documento --</option>
                                    <option name="CC" @if($usuario->tipo_documento == 'CC') selected @endif>CC</option>
                                    <option name="TI" @if($usuario->tipo_documento == 'TI') selected @endif>TI</option>
                                    <option name="CE" @if($usuario->tipo_documento == 'CE') selected @endif>CE</option>
                                    <option name="RC" @if($usuario->tipo_documento == 'RC') selected @endif>RC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group {{ $errors->has('documento') ? ' has-error' : '' }}">
                                <div @if ($errors->has('documento')) class="form-line error" @endif  class="form-line">
                                    <input type="text" class="form-control" name="documento" value="{{$usuario->documento}}" placeholder="Documento" required>
                                </div>
                                @if ($errors->has('documento'))
                                    <label class="error">{{ $errors->first('documento') }}</label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6 {{ $errors->has('dirrecion') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <div @if ($errors->has('dirrecion')) class="form-line error" @endif class="form-line" >
                                    <textarea name="dirrecion"  cols="1" rows="1" class="form-control no-resize" placeholder="Dirección" required>{{$usuario->dirrecion}}</textarea>
                                </div>
                                @if ($errors->has('dirrecion'))
                                    <label class="error">{{ $errors->first('dirrecion') }}</label>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group {{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <div @if ($errors->has('telefono')) class="form-line error" @endif class="form-line" >
                                    <input type="tel" class="form-control" name="telefono" value="{{$usuario->telefono}}" placeholder="Telefono" required>
                                </div>
                                @if ($errors->has('telefono'))
                                    <label class="error">{{ $errors->first('telefono') }}</label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <div @if ($errors->has('email')) class="form-line error" @endif class="form-line">
                                    <input type="email" class="form-control" name="email" value="{{$usuario->email}}" placeholder="Email" required>
                                </div>
                                @if ($errors->has('email'))
                                    <label class="error">{{ $errors->first('email') }}</label>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group {{ $errors->has('usuario') ? ' has-error' : '' }}">
                                <div @if ($errors->has('usuario')) class="form-line error" @endif class="form-line">
                                    <input type="usuario" class="form-control" name="usuario" value="{{$usuario->usuario}}" placeholder="Usuario" required>
                                </div>
                                @if ($errors->has('usuario'))
                                    <label class="error">{{ $errors->first('usuario') }}</label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div @if ($errors->has('password')) class="form-line error" @endif class="form-line">
                                    <input type="password" class="form-control" name="contrasena" value="{{$usuario->contrasena}}" placeholder="Password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <label class="error">{{ $errors->first('password') }}</label>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control show-tick " name="perfil" required>
                                    <option>-- Seleccione perfil --</option>
                                    <option name="admin" @if ($usuario->perfil =='Administrador') selected  @endif>Administrador</option>
                                    <option name="psico" @if ($usuario->perfil =='Psicologo' ) selected  @endif>Psicologo</option>
                                    <option name="tbs" @if ($usuario->perfil =='Trabajador Social') selected @endif>Trabajador Social</option>
                                    <option name="emple" @if ($usuario->perfil =='Empleado') selected @endif>Empleado</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {!! Form::submit('Actualizar', ['class' =>'btn btn-primary waves-effect']) !!}


                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection