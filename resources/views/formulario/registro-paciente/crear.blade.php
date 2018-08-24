@extends('layouts.app')

@section('title')
FMV | Crear Registro
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
                <h2 >
                    Nuevo registro. 
                </h2>
            </div>
            <div class="body">
            	{!! Form::open(['route' => 'registro.store', 'method' => 'POST','files'=> true ]) !!}
                    <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                        <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-col-blue">
                                <div class="panel-heading" role="tab" id="headingOne_17">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17">
                                            <i class="material-icons">perm_contact_calendar</i> paciente:
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne_17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
                                    <div class="panel-body">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('/images/user.png') }}"  width="100%">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="col-sm-12">
                                                    <label>Nombre</label>
                                                    <div class="input-group {{ $errors->has('PNombres') ? ' has-error' : '' }}" >
                                                        <div  @if ($errors->has('PNombres')) class="form-line error" @endif class="form-line">
                                                            <input name="PNombres" type="text" class="form-control" placeholder="Nombres" value="{{ old('PNombres') }}"/>
                                                        </div>
                                                        @if ($errors->has('PNombres'))
                                                            <label class="error">{{ $errors->first('PNombres') }}</label>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label>Apellidos</label>
                                                    <div class="input-group {{ $errors->has('PApellidos') ? ' has-error' : '' }}" >
                                                        <div @if ($errors->has('PApellidos')) class="form-line error" @endif class="form-line">
                                                            <input name="PApellidos" type="text" class="form-control" placeholder="Apellidos" value="{{ old('PApellidos') }}"/>
                                                        </div>
                                                        @if ($errors->has('PApellidos'))
                                                            <label class="error">{{ $errors->first('PApellidos') }}</label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label>Tipo de Documento</label>
                                                <select class="form-control" name="PTipoDocumento" required>
                                                    <option>-- Seleccione --</option>
                                                    <option name="CC" @if (old('PTipoDocumento'))=='CC' selected @endif>CC</option>
                                                    <option name="TI" @if (old('PTipoDocumento'))=='TI' selected @endif>TI</option>
                                                    <option name="CE" @if (old('PTipoDocumento'))=='CE' selected @endif>CE</option>
                                                    <option name="RC" @if (old('PTipoDocumento'))=='RC' selected @endif>RC</option>
                                                </select>
                                                @if ($errors->has('PTipoDocumento'))
                                                    <label class="error">{{ $errors->first('PTipoDocumento') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label>No. Documento</label>
                                                <div class="input-group {{ $errors->has('PDocumento') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('PDocumento')) class="form-line error" @endif class="form-line">
                                                        <input type="number" class="form-control date" name="PDocumento" placeholder="Numero Identidad" value="{{ old('PDocumento') }}"/>
                                                    </div>
                                                    @if ($errors->has('PDocumento'))
                                                        <label class="error">{{ $errors->first('PDocumento') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label>Ciudad de nacimiento</label>
                                                <select class="form-control" name="PUbicacion" data-live-search="true" required>
                                                    <option>-- Selecciona ubicacion --</option>
                                                    @foreach($Pubicacion as $Pubicacion)
                                                        <option  value="{{$Pubicacion->id}}">{{$Pubicacion->ciudad}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('PUbicacion'))
                                                    <label class="error">{{ $errors->first('PUbicacion') }}</label>
                                                @endif
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Fecha de nacimiento</label>
                                                <div class="input-group {{ $errors->has('PFechaNacimiento') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('PFechaNacimiento')) class="form-line error" @endif class="form-line">
                                                        <input type="date" class="form-control" name="PFechaNacimiento" value="{{ old('PFechaNacimiento') }}"/>
                                                    </div>
                                                    @if ($errors->has('PFechaNacimiento'))
                                                        <label class="error">{{ $errors->first('PFechaNacimiento') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label>Eps</label>
                                                <select class="form-control" name="PEps" data-live-search="true" >
                                                    <option>-- Selecciona eps --</option>
                                                    @foreach($Peps as $Peps)
                                                        <option  value="{{$Peps->id}}">{{$Peps->eps}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('PEps'))
                                                    <label class="error">{{ $errors->first('PEps') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Genero</label>
                                                <select class="form-control" name="PGenero" required>
                                                    <option>-- Seleccione --</option>
                                                    <option name="Masculino" @if (old('PGenero'))=='Masculino' selected @endif>Masculino</option>
                                                    <option name="Femenino" @if (old('PGenero'))=='Femenino' selected @endif>Femenino</option>
                                                </select>
                                                @if ($errors->has('PGenero'))
                                                    <label class="error">{{ $errors->first('PGenero') }}</label>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-3">
                                                <label>Rh</label>
                                                <div class="input-group {{ $errors->has('PRh') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('PRh')) class="form-line error" @endif class="form-line">
                                                        <input type="text" class="form-control" name="PRh" value="{{ old('PRh') }}"/>
                                                    </div>
                                                    @if ($errors->has('PRh'))
                                                        <label class="error">{{ $errors->first('PRh') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Hijos</label>
                                                <div class="input-group {{ $errors->has('PHijos') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('PHijos')) class="form-line error" @endif class="form-line">
                                                        <input type="number" name="PHijos" class="form-control" min="0" value="{{ old('PHijos') }}"/>
                                                    </div>
                                                    @if ($errors->has('PHijos'))
                                                        <label class="error">{{ $errors->first('PHijos') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Alias</label>
                                                <div class="input-group {{ $errors->has('PAlias') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('PAlias')) class="form-line error" @endif class="form-line">
                                                        <input type="text" class="form-control" name="PAlias" value="{{ old('PAlias') }}"/>
                                                    </div>
                                                    @if ($errors->has('PAlias'))
                                                        <label class="error">{{ $errors->first('PAlias') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <label>Nivel Educativo</label>
                                                <select class="form-control" name="PEstudios">
                                                    <option>-- Seleccione --</option>
                                                    <option name="primaria" @if(old('PEstudios')) =='primaria' selected @endif>Primaria</option>
                                                    <option name="secundaria" @if(old('PEstudios')) =='secundaria' selected @endif>Secundaria</option>
                                                    <option name="universitario"  @if( old('PEstudios')) =='universitario' selected @endif>Universitario</option>
                                                    <option name="ninguno" @if(old('PEstudios')) =='ninguno' selected @endif>Ninguno</option>
                                                </select>
                                                @if ($errors->has('PEstudios'))
                                                    <label class="error">{{ $errors->first('PEstudios') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label>Estado Civil</label>
                                                <select class="form-control" name="PEstadoCivil" required>
                                                    <option>-- Seleccione --</option>
                                                    <option name="soltero(a)" @if(old('PEstadoCivil')) =='soltero(a)' selected @endif>Soltero(a)</option>
                                                    <option name="casado(a)"  @if(old('PEstadoCivil')) =='casado(a)' selected @endif>Casado(a)</option>
                                                    <option name="viudo(a)"   @if(old('PEstadoCivil')) =='viudo(a)' selected @endif>Viudo(a)</option>
                                                    <option name="union_libre" @if(old('PEstadoCivil')) =='union_libre' selected @endif>Union Libre</option>
                                                </select>
                                                @if ($errors->has('estado_civil'))
                                                    <label class="error">{{ $errors->first('estado_civil') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Observaciones generales:</label>
                                            <div class="input-group {{ $errors->has('PObservacion') ? ' has-error' : '' }}" >
                                                <div  @if ($errors->has('PObservacion')) class="form-line error" @endif class="form-line">
                                                    <textarea rows="4" name="PObservacion"  class="form-control no-resize auto-growth" name="senales" placeholder="Descripcion del paciente, rasgos fisicos, estado de salud, entre otros." value="{{ old('PObservacion') }}"></textarea>
                                                </div>
                                                @if ($errors->has('PObservacion'))
                                                    <label class="error">{{ $errors->first('PObservacion') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-cyan">
                                <div class="panel-heading" role="tab" id="headingTwo_17">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseTwo_17" aria-expanded="false"
                                           aria-controls="collapseTwo_17">
                                            <i class="material-icons">contact_phone</i> acudiente:
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
                                    <div class="panel-body">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label>Nombre</label>
                                                <div class="input-group {{ $errors->has('ANombres') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('ANombres')) class="form-line error" @endif class="form-line">
                                                        <input name="ANombres" type="text" class="form-control" placeholder="Nombres" value="{{ old('ANombres') }}"/>
                                                    </div>
                                                    @if ($errors->has('ANombres'))
                                                        <label class="error">{{ $errors->first('ANombres') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Apellidos</label>
                                                <div class="input-group {{ $errors->has('AApellidos') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('AApellidos')) class="form-line error" @endif class="form-line">
                                                        <input name="AApellidos" type="text" class="form-control" placeholder="AApellidos" value="{{ old('AApellidos') }}"/>
                                                    </div>
                                                    @if ($errors->has('AApellidos'))
                                                        <label class="error">{{ $errors->first('AApellidos') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label>Tipo de Documento</label>
                                                <select class="form-control" name="ATipoDocumento" required>
                                                    <option>-- Seleccione --</option>
                                                    <option name="CC" @if(old('ATipoDocumento')) =='CC' selected @endif>CC</option>
                                                    <option name="TI" @if(old('ATipoDocumento')) =='TI' selected @endif>TI</option>
                                                    <option name="CE" @if(old('ATipoDocumento')) =='CE' selected @endif>CE</option>
                                                    <option name="RC" @if(old('ATipoDocumento')) =='RC' selected @endif>RC</option>
                                                </select>
                                                @if ($errors->has('ATipoDocumento'))
                                                    <label class="error">{{ $errors->first('ATipoDocumento') }}</label>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <label>No. Documento</label>
                                                <div class="input-group {{ $errors->has('ADocumento') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('ADocumento')) class="form-line error" @endif class="form-line">
                                                        <input type="number" class="form-control date" name="ADocumento" placeholder="Numero Identidad" value="{{ old('ADocumento') }}"/>
                                                    </div>
                                                    @if ($errors->has('ADocumento'))
                                                        <label class="error">{{ $errors->first('ADocumento') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <div class="form-line" >
                                                    <label>Ciudad</label>
                                                    <select class="form-control" name="AUbicacion" data-live-search="true" >
                                                        <option>-- Selecciona ubicacion --</option>
                                                        @foreach($Aubicacion as $Aubicacion)
                                                            <option  value="{{$Aubicacion->id}}">{{$Aubicacion->ciudad}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('AUbicacion'))
                                                        <label class="error">{{ $errors->first('AUbicacion') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Parentesco con Interno</label>
                                                <select class="form-control show-tick" name="AParentesco" required>
                                                    <option>-- Seleccione --</option>
                                                    <option name="madre" @if (old('AParentesco'))=='madre' selected @endif>Madre</option>
                                                    <option name="padre" @if (old('AParentesco'))=='padre' selected @endif>Padre</option>
                                                    <option name="hijo(a)" @if (old('AParentesco'))=='hijo(a)' selected @endif>Hijo(a)</option>
                                                    <option name="tio(a)" @if (old('AParentesco'))=='tio(a)' selected @endif>Tio(a)</option>
                                                    <option name="primo(a)" @if (old('parentesco'))=='primo(a)' selected @endif>Primo(a)</option>
                                                    <option name="amigo(a)" @if (old('AParentesco'))=='amigo(a)' selected @endif>Amigo(a)</option>
                                                </select>
                                                @if ($errors->has('AParentesco'))
                                                    <label class="error">{{ $errors->first('AParentesco') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-5">
                                                <label>Dirección</label>
                                                <div class="input-group {{ $errors->has('ADireccion') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('ADireccion')) class="form-line error" @endif class="form-line">
                                                        <input type="text" name="ADireccion" class="form-control" value="{{ old('ADireccion') }}"/>
                                                    </div>
                                                    @if ($errors->has('ADireccion'))
                                                        <label class="error">{{ $errors->first('ADireccion') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Telefono</label>
                                                <div class="input-group {{ $errors->has('ATelefono') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('ATelefono')) class="form-line error" @endif class="form-line">
                                                        <input type="text" name="ATelefono" class="form-control" value="{{ old('ATelefono') }}"/>
                                                    </div>
                                                    @if ($errors->has('ATelefono'))
                                                        <label class="error">{{ $errors->first('ATelefono') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Profesion</label>
                                                <div class="input-group {{ $errors->has('AProfesion') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('AProfesion')) class="form-line error" @endif class="form-line">
                                                        <input type="text" name="AProfesion" class="form-control" min="0" value="{{ old('AProfesion') }}"/>
                                                    </div>
                                                    @if ($errors->has('AProfesion'))
                                                        <label class="error">{{ $errors->first('AProfesion') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label>Empresa donde labora</label>
                                                <div class="input-group {{ $errors->has('AEmpresaLabora') ? ' has-error' : '' }}" >
                                                    <div  @if ($errors->has('AEmpresaLabora')) class="form-line error" @endif class="form-line">
                                                        <input type="text" name="AEmpresaLabora" class="form-control" value="{{ old('AEmpresaLabora') }}"/>
                                                    </div>
                                                    @if ($errors->has('AEmpresaLabora'))
                                                        <label class="error">{{ $errors->first('AEmpresaLabora') }}</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                    <button class="btn btn-danger waves-effect" type="reset">Cancelar</button>
                {!! Form::close() !!}
            </div>   
        </div>
    </div>
</div>

@endsection


