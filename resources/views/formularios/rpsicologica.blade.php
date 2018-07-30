@extends('layouts.app')

@section('title')
    FMV | Remision Psicologica
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
        REMISION PSICOLOGICA
    </h1>
</div>
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form id="form_validation" method="POST" action="{{url("")}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div id="form_validation">
                        <div class="input-group-lg">
                            <div class="row clearfix">
                                <br>
                                <div class="col-md-2">
                                    <div class="input-group {{ $errors->has('fecha') ? ' has-error' : '' }}" >
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div  @if ($errors->has('fecha')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="datepicker form-control" name="fecha" placeholder="fecha" value="{{ old('fecha') }}"/>
                                        </div>
                                        @if ($errors->has('fecha'))
                                            <label class="error">{{ $errors->first('fecha') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">1. Datos del Remitido</h2>
                            <div class="row clearfix">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="nombres"  placeholder="Nombres" value="{{ old('nombres') }}"/>
                                        </div>
                                        @if ($errors->has('nombres'))
                                            <label class="error">{{ $errors->first('nombres') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <select class="form-control" name="genero">
                                        <option>-- Seleccione Sexo --</option>
                                        <option name="Masculino" @if (old('genero'))=='Masculino' selected @endif>Masculino</option>
                                        <option name="Femenino" @if (old('genero'))=='Femenino' selected @endif>Femenino</option>
                                    </select>
                                    @if ($errors->has('genero'))
                                        <label class="error">{{ $errors->first('genero') }}</label>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group {{ $errors->has('edad') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('edad')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="edad" placeholder="Edad" value="{{ old('edad') }}"/>
                                        </div>
                                        @if ($errors->has('edad'))
                                            <label class="error">{{ $errors->first('edad') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="input-group {{ $errors->has('nombre') ? ' has-error' : '' }}>
                                        <div  @if ($errors->has('nombre')) class="form-line error" @endif class="form-line">
                                             <input type="text"  name="nombre" class="form-control" required value="{{ old('nombre') }}"/>
                                        </div>
                                        @if ($errors->has('nombre'))
                                            <label class="error">{{ $errors->first('nombre') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-3">
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
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
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
                                <div class="col-md-3">
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
                                <div class="col-md-4">
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
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <select class="form-control" name="remite">
                                        <option>-- seleccione Remite Paciente a: --</option>
                                        <option name="medico_general" @if (old('remite'))=='medico_general' selected @endif>Medico General</option>
                                        <option name="psiquiatria" @if (old('remite'))=='psiquiatria' selected @endif>Psiquiatria</option>
                                        <option name="eps" @if (old('remite'))=='eps' selected @endif>Eps</option>
                                        <option name="otros" @if (old('remite'))=='otros' selected @endif>Otros</option>
                                        <option name="observacion" @if (old('remite'))=='observacion' selected @endif>Observacion</option>
                                    </select>
                                    @if ($errors->has('remite'))
                                        <label class="error">{{ $errors->first('remite') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">2. Descripcion</h2>
                                    <div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('descripcion')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="descripcion" value="{{ old('descripcion') }}"></textarea>
                                        </div>
                                        @if ($errors->has('descripcion'))
                                            <label class="error">{{ $errors->first('descripcion') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">3. Motivo de la Remision</h2>
                                    <div class="form-group {{ $errors->has('motivo_remision') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('motivo_remision')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="motivo_remision" value="{{ old('motivo_remision') }}"></textarea>
                                        </div>
                                        @if ($errors->has('motivo_remision'))
                                            <label class="error">{{ $errors->first('motivo_remision') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">4. Recomendaciones</h2>
                                    <div class="form-group {{ $errors->has('recomendaciones') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('recomendaciones')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="recomendaciones" value="{{ old('recomendaciones') }}"></textarea>
                                        </div>
                                        @if ($errors->has('recomendaciones'))
                                            <label class="error">{{ $errors->first('recomendaciones') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                            <button class="btn btn-danger waves-effect" type="submit">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
