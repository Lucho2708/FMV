@extends('layouts.app')

@section('title')
FMV | Editar Paciente
@endsection

@section('css')
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h1>
                HOJA DE VIDA
            </h1>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <br>
                    <div class="body">
                        {!! Form::open(['route' =>  ['paciente.update',$paciente],'method' => 'PUT']) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row clearfix">
                            <div class="col-md-2" id="list">
                                <img  src="/images/perfil-d.jpeg"  style="width: 150px; height: 150px; float:left; border-radius: 50%; margin-right:25px ">
                            </div>
                            <div class="col-md-3">
                                <div  id="estilo-foto" class="glyphicon glyphicon-download-alt ">
                                    <div class="form">
                                        <input type="file" class="form-control" name="foto" id="files">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <label>Nombres</label>
                                <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="nombres"  placeholder="Nombres" value="{{$paciente->nombres}}" required>
                                    </div>
                                    @if ($errors->has('nombres'))
                                        <label class="error">{{ $errors->first('nombres') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-7">
                                <label>Apellidos</label>
                                <div class="input-group {{ $errors->has('apellidos') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos" value="{{$paciente->apellidos}}" required>
                                    </div>
                                    @if ($errors->has('apellidos'))
                                        <label class="error">{{ $errors->first('apellidos') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-4">
                                <label>Fecha Nacimiento</label>
                                <div class="input-group {{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('fecha_nacimiento')) class="form-line error" @endif class="form-line">
                                        <input type="date" class="form-control date" name="fecha_nacimiento"  value="{{$paciente->fecha_nacimiento}}" required>
                                    </div>
                                    @if ($errors->has('fecha_nacimiento'))
                                        <label class="error">{{ $errors->first('fecha_nacimiento') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Edad</label>
                                <div class="input-group {{ $errors->has('edad') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('edad')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="edad" placeholder="Edad" value="{{$paciente->edad}}" required>
                                    </div>
                                    @if ($errors->has('edad'))
                                        <label class="error">{{ $errors->first('edad') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Tipo de Documento</label>
                                <select class="form-control" name="tipo_documento" required>
                                    <option>-- Seleccione --</option>
                                    <option name="CC" @if($paciente->tipo_documento == 'CC') selected @endif>CC</option>
                                    <option name="TI" @if($paciente->tipo_documento == 'TI') selected @endif>TI</option>
                                    <option name="CE" @if($paciente->tipo_documento == 'CE') selected @endif>CE</option>
                                    <option name="RC" @if($paciente->tipo_documento == 'RC') selected @endif>RC</option>
                                </select>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <label>Documento</label>
                                <div class="input-group {{ $errors->has('documento') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('documento')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="documento" placeholder="Numero Identidad" value="{{$paciente->documento}}" required>
                                    </div>
                                    @if ($errors->has('documento'))
                                        <label class="error">{{ $errors->first('documento') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Sexo</label>
                                <select class="form-control" name="genero">
                                    <option>-- Seleccione --</option>
                                    <option name="Masculino" @if($paciente->genero == 'Masculino')  selected @endif>Masculino</option>
                                    <option name="Femenino" @if($paciente->genero == 'Femenino')  selected @endif>Femenino</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Ubicacion</label>
                                <select class="form-control" name="ubicacion_id" data-live-search="true" required>
                                    <option>-- Selecciona ubicacion --</option>
                                    @foreach($ubicacion as $ubicacion)
                                        <option value="{{$ubicacion->id}}">{{$ubicacion->ciudad}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <label>Procedencia</label>
                                <div class="input-group {{ $errors->has('procedencia') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('procedencia')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date"  name="procedencia" placeholder="Grupo Etnico" value="{{$paciente->procedencia}}" required>
                                    </div>
                                    @if ($errors->has('procedencia'))
                                        <label class="error">{{ $errors->first('procedencia') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Eps</label>
                                <select class="form-control" name="eps_id"  data-live-search="true" required>
                                    <option>-- Seleccione --</option>
                                    @foreach($eps as $eps)
                                        <option value={{ $eps->id }}>{{$eps->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Fecha Ingreso</label>
                                <div class="input-group {{ $errors->has('fecha_ingreso') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('procedencia')) class="form-line error" @endif class="form-line">
                                        <input type="date" class="form-control date" name="fecha_ingreso"  value="{{$paciente->fecha_ingreso}}" required>
                                    </div>
                                    @if ($errors->has('fecha_ingreso'))
                                        <label class="error">{{ $errors->first('fecha_ingreso') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <label>Estado Civil</label>
                                <select class="form-control" name="estado_civil" required>
                                    <option>-- Seleccione --</option>
                                    <option name="soltero(a)" @if($paciente->estado_civil == 'soltero(a)') selected @endif>Soltero(a)</option>
                                    <option name="casado(a)" @if($paciente->estado_civil == 'casado(a)') selected @endif>Casado(a)</option>
                                    <option name="viudo(a)" @if($paciente->estado_civil == 'viudo(a)') selected @endif>Viudo(a)</option>
                                    <option name="union libre" @if($paciente->estado_civil == 'union libre') selected @endif>Union Libre</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Hijos</label>
                                <div class="input-group {{ $errors->has('hijos') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('hijos')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="hijos" placeholder="No. Hijos" value="{{$paciente->hijos}}" required>
                                    </div>
                                    @if ($errors->has('hijos'))
                                        <label class="error">{{ $errors->first('hijos') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Alias</label>
                                <div class="input-group{{ $errors->has('alias') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('alias')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="alias" placeholder="Alias" value="{{$paciente->alias}}" required>
                                    </div>
                                    @if ($errors->has('alias'))
                                        <label class="error">{{ $errors->first('alias') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <label>Señales</label>
                                <div class="input-group{{ $errors->has('senales') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('senales')) class="form-line error" @endif class="form-line">
                                        <textarea rows="1" cols="1" class="form-control no-resize" name="senales" placeholder="Señales" value="{{$paciente->senales}}" required></textarea>
                                    </div>
                                    @if ($errors->has('senales'))
                                        <label class="error">{{ $errors->first('senales') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Rh</label>
                                <div class="input-group{{ $errors->has('rh') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('rh')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="rh" placeholder="RH" value="{{$paciente->rh}}" required>
                                    </div>
                                    @if ($errors->has('rh'))
                                        <label class="error">{{ $errors->first('rh') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Nivel Educativo</label>
                                <select class="form-control" name="estudios">
                                    <option>-- Seleccione --</option>
                                    <option name="primaria" @if($paciente->estudios == 'primaria') selected @endif>Primaria</option>
                                    <option name="secundaria" @if($paciente->estudios == 'secundaria') selected @endif>Secundaria</option>
                                    <option name="universitaria" @if($paciente->estudios == 'universitaria') selected @endif>Universitaria</option>
                                    <option name="ninguno" @if($paciente->estudios == 'ninguno') selected @endif>Ninguno</option>
                                </select>
                            </div>
                        </div>
                            {!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection