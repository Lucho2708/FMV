@extends('layouts.app')

@section('title')
    FMV | Historia Clinica
@endsection

@section('css')
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
<div class="block-header">
    <h1>
            Historia Clinica
    </h1>
</div>
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form id="form_validation" method="POST" action="{{url("")}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <div class="input-group-lg">
                            <div class="row clearfix">
                                <br>
                                <div class="col-md-3">
                                    <div class="input-group {{ $errors->has('numero') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('numero')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="numero" placeholder="No." value="{{ old('numero') }}"/>
                                        </div>
                                        @if ($errors->has('numero'))
                                            <label class="error">{{ $errors->first('numero') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group {{ $errors->has('fecha') ? ' has-error' : '' }}" >
                                        <div align="right" @if ($errors->has('fecha')) class="form-line error" @endif class="form-line">
                                            <input align="right" type="text" class="datepicker form-control" name="fecha" placeholder="fecha" value="{{ old('fecha') }}"/>
                                        </div>
                                        @if ($errors->has('fecha'))
                                            <label class="error">{{ $errors->first('fecha') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">I. Quien Solicita</h2>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="nombres" placeholder="Nombre" value="{{ old('nombres') }}"/>
                                        </div>
                                        @if ($errors->has('nombres'))
                                            <label class="error">{{ $errors->first('nombres') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('apellidos') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}"/>
                                        </div>
                                        @if ($errors->has('apellidos'))
                                            <label class="error">{{ $errors->first('apellidos') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('documento') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('documento')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control" name="documento" placeholder="Documento" value="{{ old('documento') }}"/>
                                        </div>
                                        @if ($errors->has('documento'))
                                            <label class="error">{{ $errors->first('documento') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control show-tick" name="parentesco" required>
                                        <option>-- Parentesco Con Interno --</option>
                                        <option name="madre" @if (old('parentesco'))=='madre' selected @endif>Madre</option>
                                        <option name="padre" @if (old('parentesco'))=='padre' selected @endif>Padre</option>
                                        <option name="hijo(a)" @if (old('parentesco'))=='hijo(a)' selected @endif>Hijo(a)</option>
                                        <option name="tio(a)" @if (old('parentesco'))=='tio(a)' selected @endif>Tio(a)</option>
                                        <option name="primo(a)" @if (old('parentesco'))=='primo(a)' selected @endif>Primo(a)</option>
                                        <option name="amigo(a)" @if (old('parentesco'))=='amigo(a)' selected @endif>Amigo(a)</option>
                                    </select>
                                    @if ($errors->has('parentesco'))
                                        <label class="error">{{ $errors->first('parentesco') }}</label>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <h2 class="card-inside-title">II. Informacion Paciente</h2>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="nombres" placeholder="Nombre" value="{{ old('nombres') }}"/>
                                        </div>
                                        @if ($errors->has('nombres'))
                                            <label class="error">{{ $errors->first('nombres') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('apellidos') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}"/>
                                        </div>
                                        @if ($errors->has('apellidos'))
                                            <label class="error">{{ $errors->first('apellidos') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="tipo_documento" required>
                                        <option>-- tipo de documento --</option>
                                        <option name="CC" @if (old('tipo_documento'))=='CC' selected @endif>CC</option>
                                        <option name="TI" @if (old('tipo_documento'))=='TI' selected @endif>TI</option>
                                        <option name="CE" @if (old('tipo_documento'))=='CE' selected @endif>CE</option>
                                        <option name="RC" @if (old('tipo_documento'))=='RC' selected @endif>RC</option>
                                    </select>
                                    @if ($errors->has('tipo_documento'))
                                        <label class="error">{{ $errors->first('tipo_documento') }}</label>
                                    @endif
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('documento') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('documento')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="documento" placeholder="Numero Identidad" value="{{ old('documento') }}"/>
                                        </div>
                                        @if ($errors->has('documento'))
                                            <label class="error">{{ $errors->first('documento') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="genero">
                                        <option>-- Seleccione Sexo --</option>
                                        <option name="Masculino" @if (old('genero'))=='Masculino' selected @endif>Masculino</option>
                                        <option name="Femenino" @if (old('genero'))=='Femenino' selected @endif>Femenino</option>
                                    </select>
                                    @if ($errors->has('genero'))
                                        <label class="error">{{ $errors->first('genero') }}</label>
                                    @endif
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('edad') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('edad')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="edad" placeholder="Edad" value="{{ old('edad') }}"/>
                                        </div>
                                        @if ($errors->has('edad'))
                                            <label class="error">{{ $errors->first('documento') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="estado_civil" required>
                                        <option>-- Estado Civil --</option>
                                        <option name="soltero(a)" @if (old('estado_civil'))=='soltero(a)' selected @endif>Soltero(a)</option>
                                        <option name="casado(a)" @if (old('estado_civil'))=='casado(a)' selected @endif>Casado(a)</option>
                                        <option name="viudo(a)" @if (old('estado_civil'))=='viudo(a)' selected @endif>Viudo(a)</option>
                                        <option name="union libre" @if (old('estado_civil'))=='union libre' selected @endif>Union Libre</option>
                                    </select>
                                    @if ($errors->has('estado_civil'))
                                        <label class="error">{{ $errors->first('estado_civil') }}</label>
                                    @endif
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('fecha_nacimiento')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="datepicker form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" value="{{ old('fecha_nacimiento') }}"/>
                                        </div>
                                        @if ($errors->has('fecha_nacimiento'))
                                            <label class="error">{{ $errors->first('fecha_nacimiento') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('procedencia') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('procedencia')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date"  name="procedencia" placeholder="Lugar nacimiento" value="{{ old('procedencia') }}"/>
                                        </div>
                                        @if ($errors->has('procedencia'))
                                            <label class="error">{{ $errors->first('procedencia') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('dirrecion') ? ' has-error' : '' }}">
                                        <div @if ($errors->has('dirrecion')) class="form-line error" @endif class="form-line" >
                                            <input type="text" class="form-control date" name="dirrecion" placeholder="Dirrecion" required value="{{ old('dirrecion') }}">
                                        </div>
                                        @if ($errors->has('dirrecion'))
                                            <label class="error">{{ $errors->first('dirrecion') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                                        <div @if ($errors->has('nombre')) class="form-line error" @endif class="form-line" >
                                            <input type="text" class="form-control date" name="nombre" placeholder="Ciudad" required value="{{ old('nombre') }}">
                                        </div>
                                        @if ($errors->has('nombre'))
                                            <label class="error">{{ $errors->first('nombre') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('telefono') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="material-icons">phone_iphone</i>
                                    </span>
                                        <div @if ($errors->has('telefono')) class="form-line error" @endif class="form-line" >
                                            <input type="text" class="form-control mobile-phone-number" placeholder="Telefono Celular" name="telefono o celular" required value="{{ old('telefono') }}">
                                        </div>
                                        @if ($errors->has('telefono'))
                                            <label class="error">{{ $errors->first('telefono') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="estudios">
                                        <option>-- Nivel Educativo --</option>
                                        <option name="primaria" @if (old('estudios'))=='primaria' selected @endif>Primaria</option>
                                        <option name="secundaria" @if (old('estudios'))=='secundaria' selected @endif>Secundaria</option>
                                        <option name="universitaria" @if (old('estudios'))=='universitaria' selected @endif>Universitaria</option>
                                        <option name="ninguno" @if (old('estudios'))=='ninguno' selected @endif>Ninguno</option>
                                    </select>
                                    @if ($errors->has('estudios'))
                                        <label class="error">{{ $errors->first('estudios') }}</label>
                                    @endif
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="nombre" required>
                                        <option>-- Seleccione Eps, Sisben, Ars --</option>
                                        <option name=""></option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <h2 class="card-inside-title">III. Genograma</h2>
                            <div class="row clearfix">
                                <div class="col-md-10">
                                    <input type="file" id="genograma">
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">IV.Descripcion del funcionamiento familiar.</h2>
                                    <div class="form-group {{ $errors->has('funcionamiento_familiar') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('funcionamiento_familiar')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4"  class="form-control no-resize" name="funcionamiento_familiar" value="{{ old('funcionamiento_familiar') }}"></textarea>
                                        </div>
                                        @if ($errors->has('funcionamiento_familiar'))
                                            <label class="error">{{ $errors->first('funcionamiento_familiar') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">V.Motivo de la consulta.</h2>
                                    <div class="form-group {{ $errors->has('motivo_consulta') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('motivo_consulta')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="motivo_consulta" value="{{ old('motivo_consulta') }}"></textarea>
                                        </div>
                                        @if ($errors->has('motivo_consulta'))
                                            <label class="error">{{ $errors->first('motivo_consulta') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">VI.Diagnostico (DSM IV).</h2>
                                    <div class="form-group {{ $errors->has('diagnostico') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('diagnostico')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="diagnostico" value="{{ old('diagnostico') }}"></textarea>
                                        </div>
                                        @if ($errors->has('diagnostico'))
                                            <label class="error">{{ $errors->first('diagnostico') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">VII.Definicion del problema.</h2>
                                    <div class="form-group {{ $errors->has('definicion_problema') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('definicion_problema')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="definicion_problema" value="{{ old('definicion_problema') }}"></textarea>
                                        </div>
                                        @if ($errors->has('definicion_problema'))
                                            <label class="error">{{ $errors->first('definicion_problema') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">VIII.Sistema de Hipotesis.</h2>
                                    <div class="form-group {{ $errors->has('hipotesis') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('hipotesis')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="hipotesis" value="{{ old('hipotesis') }}"></textarea>
                                        </div>
                                        @if ($errors->has('hipotesis'))
                                            <label class="error">{{ $errors->first('hipotesis') }}</label>
                                        @endif
                                    </div>
                                </div>
                            <div>
                            <div class="row clearfix"></div>
                            <br>
                            <h2 class="card-inside-title">IX.Intervencion:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <div class="form-group {{ $errors->has('objectivo_general') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('objectivo_general')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="objectivo_general" placeholder="A. Objectivo general" value="{{ old('objectivo_general') }}"></textarea>
                                        </div>
                                        @if ($errors->has('objectivo_general'))
                                            <label class="error">{{ $errors->first('objectivo_general') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group {{ $errors->has('objectivo_especifico') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('objectivo_especifico')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="objectivo_especifico" placeholder="B. Objectivo especifico" value="{{ old('objectivo_especifico') }}"></textarea>
                                        </div>
                                        @if ($errors->has('objectivo_especifico'))
                                            <label class="error">{{ $errors->first('objectivo_especifico') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <div class="form-group {{ $errors->has('tecnica') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('tecnica')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="tecnica" placeholder="C. Tecnicas" value="{{ old('tecnica') }}"></textarea>
                                        </div>
                                        @if ($errors->has('tecnica'))
                                            <label class="error">{{ $errors->first('tecnica') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">X.Observaciones.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <div class="form-group {{ $errors->has('observaciones') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('observaciones')) class="form-line error" @endif class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="observaciones"  value="{{ old('observaciones') }}"></textarea>
                                        </div>
                                        @if ($errors->has('observaciones'))
                                            <label class="error">{{ $errors->first('observaciones') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
