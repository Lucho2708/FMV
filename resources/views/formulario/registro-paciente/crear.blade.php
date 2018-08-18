@extends('layouts.app')

@section('title')
FMV | Crear Acudiente
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
            	{!! Form::open(['route' => 'registro.store', 'method' => 'POST',$Pubicacion,$Aubicacion,'files'=> true ]) !!}
           
	                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
	                    <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
	                        <div class="panel panel-col-blue">
	                            <div class="panel-heading" role="tab" id="headingOne_17">
	                                <h4 class="panel-title">
	                                    <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17">
	                                        <i class="material-icons">perm_contact_calendar</i> Registro de paciente:
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
						                            <div class="input-group" >
						                                <div class="form-line">
						                                    <input name="PNombres" type="text" class="form-control" placeholder="Nombres" />
						                                </div>
						                            </div>
						                        </div>
						                        <div class="col-sm-12">
						                            <label>Apellidos</label>
						                            <div class="input-group" >
						                                <div class="form-line">
						                                    <input name="PApellidos" type="text" class="form-control" placeholder="Apellidos"/>
						                                </div>
						                            </div>
						                        </div>
					                        </div>
					                    </div>
					                    <div class="row clearfix">
					                    	<div class="col-sm-6">
					                    		<label>Tipo de Documento</label>
					                            <select class="form-control" name="PTipoDocumento" required>
					                                <option>-- Seleccione --</option>
					                                <option name="CC" @if (old('tipo_documento'))=='CC' selected @endif>CC</option>
					                                <option name="TI" @if (old('tipo_documento'))=='TI' selected @endif>TI</option>
					                                <option name="CE" @if (old('tipo_documento'))=='CE' selected @endif>CE</option>
					                                <option name="RC" @if (old('tipo_documento'))=='RC' selected @endif>RC</option>
					                            </select>
					                    	</div>
					                    	<div class="col-sm-6">
					                    		<label>No. Documento</label>
					                            <div class="input-group" >
					                                <div class="form-line">
					                                    <input type="number" class="form-control date" name="PDocumento" placeholder="Numero Identidad" />
					                                </div>
					                            </div>
					                    	</div>
					                    </div>
					                    <div class="row clearfix">
					                    	<div class="col-sm-3">
					                    		<div class="form-line" >
					                				<label>Ciudad de nacimiento</label>

					                                <select class="form-control" name="PUbicacion" data-live-search="true" required>
					                                    <option>-- Selecciona ubicacion --</option>
					                                    @foreach($Pubicacion as $Pubicacion)
                                            				<option  value="{{$Pubicacion->id}}">{{$Pubicacion->ciudad}}</option>
                                        				@endforeach
					                                </select>
					                			</div>
					                    	</div>
					                    	
					                    	<div class="col-sm-3">
					                    		<label>Fecha de nacimiento</label>
					                    		<div class="input-group">
					                    			<div class="form-line" >
					                    				<input type="date" class="form-control" name="PFechaNacimiento">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					            				<label>Rh</label>
					                			<div class="input-group">
					            					<div class="form-line" >
					                					<input type="text" class="form-control" name="PRh">
					                				</div>
					                			</div>
					                		</div>
					                    	<div class="col-sm-3">
					                    		<label>Genero</label>
					                            <select class="form-control" name="PGenero" required>
					                                <option>-- Seleccione --</option>
					                                <option name="CC" @if (old('PGenero'))=='Masculino' selected @endif>Masculino</option>
					                                <option name="TI" @if (old('PGenero'))=='Masculino' selected @endif>Femenino</option>
					                            </select>
					                    	</div>                    	
					                    </div>
					                    <div class="row clearfix"> 
					                    	<div class="col-sm-3">
					            				<label>Alias</label>
					                			<div class="input-group">
					            					<div class="form-line" >
					                					<input type="text" class="form-control" name="PAlias">
					                				</div>
					                			</div>
					                		</div>
					                    	<div class="col-sm-3">
					                    		<label>Estudios</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                    				<input type="text" name="PEstudios" class="form-control">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Estado civil</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                					<input type="text" name="PEstadoCivil" class="form-control">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Hijos</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                					<input type="number" name="PHijos" class="form-control" min="0">
					                    			</div>
					                    		</div>
					                    	</div>                   	
					                    </div>
					                    <div class="form-group">
					                    	<label>Observaciones generales:</label>
					                        <div class="form-line">
					                            <textarea rows="4" class="form-control no-resize auto-growth" placeholder="Descripcion del paciente, rasgos fisicos, estado de salud, entre otros." name="PObservacion"></textarea>
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
	                                        <i class="material-icons">contact_phone</i> Registro acudiente:
	                                    </a>
	                                </h4>
	                            </div>
	                            <div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
	                                <div class="panel-body">
					                    <div class="row clearfix">
					                        <div class="col-sm-6">
					                            <label>Nombre:</label>
					                            <div class="input-group" >
					                                <div class="form-line">
					                                    <input name="ANombres" type="text" class="form-control" placeholder="Nombres" />
					                                </div>
					                            </div>
					                        </div>
					                        <div class="col-sm-6">
					                            <label>Apellidos</label>
					                            <div class="input-group" >
					                                <div class="form-line">
					                                    <input name="AApellidos" type="text" class="form-control" placeholder="Apellidos"/>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="row clearfix">
					                    	<div class="col-sm-6">
					                    		<label>Tipo de Documento</label>
					                            <select class="form-control" name="ATipoDocumento" >
					                                <option>-- Seleccione --</option>
					                                <option name="CC" @if (old('tipo_documento'))=='CC' selected @endif>CC</option>
					                                <option name="TI" @if (old('tipo_documento'))=='TI' selected @endif>TI</option>
					                                <option name="CE" @if (old('tipo_documento'))=='CE' selected @endif>CE</option>
					                                <option name="RC" @if (old('tipo_documento'))=='RC' selected @endif>RC</option>
					                            </select>
					                    	</div>
					                    	<div class="col-sm-6">
					                    		<label>No. Documento</label>
					                            <div class="input-group" >
					                                <div class="form-line">
					                                    <input type="number" class="form-control date" name="ADocumento" placeholder="Numero Identidad" value="{{ old('documento') }}"/>
					                                </div>
					                            </div>
					                    	</div>
					                    </div>
					                    
					                    <div class="row clearfix"> 
					                    	<div class="col-sm-3">
					                    		<div class="form-line" >
					                				<label>Ciudad</label>
					                                <select class="form-control" name="AUbicacion" data-live-search="true" >
					                                    <option>-- Selecciona ubicacion --</option>
					                                   	@foreach($Aubicacion as $Aubicacion)
                                            				<option  value="{{$Aubicacion->id}}">{{$Aubicacion->ciudad}}</option>
                                        				@endforeach
					                                </select>
					                			</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Dirección</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                    				<input type="text" name="ADireccion" class="form-control">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Telefono</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                					<input type="text" name="ATelefono" class="form-control">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Profesion</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                					<input type="text" name="AProfesion" class="form-control" min="0">
					                    			</div>
					                    		</div>
					                    	</div>                   	
					                    </div>
					                    <div class="row clearfix">
					                    	<div class="col-sm-6">
					                    		<label>Empresa donde labora</label>
					                    		<div class="input-group">
						                    		<div class="form-line">
						                    			<input type="text" name="AEmpresaLabora" class="form-control">
						                    		</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-6">
					                    		<label>Parentesco</label>
					                    		<div class="input-group">
						                    		<div class="form-line">
						                    			<input type="text" name="AParentesco" class="form-control">
						                    		</div>
					                    		</div>
					                    	</div>
					                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	                	<button class="btn btn-primary waves-effect" type="submit">Crear</button>
                   		<button class="btn btn-danger waves-effect" type="reset">Cancelar</button>
                {!! Form::close() !!}
            </div>   
        </div>
    </div>
</div>

@endsection


