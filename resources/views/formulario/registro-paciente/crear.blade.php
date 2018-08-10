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
                <form method="POST" action="{{ route('registro.store') }} " >
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
						                                    <input name="paciente-nombres" type="text" class="form-control" placeholder="Nombres" />
						                                </div>
						                            </div>
						                        </div>
						                        <div class="col-sm-12">
						                            <label>Apellidos</label>
						                            <div class="input-group" >
						                                <div class="form-line">
						                                    <input name="paciente-apellidos" type="text" class="form-control" placeholder="Apellidos"/>
						                                </div>
						                            </div>
						                        </div>
					                        </div>
					                    </div>
					                    <div class="row clearfix">
					                    	<div class="col-sm-6">
					                    		<label>Tipo de Documento</label>
					                            <select class="form-control" name="paciente-tipo_documento" required>
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
					                                    <input type="number" class="form-control date" name="paciente-documento" placeholder="Numero Identidad" />
					                                </div>
					                            </div>
					                    	</div>
					                    </div>
					                    <div class="row clearfix">
					                    	<div class="col-sm-3">
					            				<label>Alias</label>
					                			<div class="input-group">
					            					<div class="form-line" >
					                					<input type="text" name="" class="form-control" name="paciente-alias">
					                				</div>
					                			</div>
					                		</div>
					                    	<div class="col-sm-3">
					                    		<label>Fecha de nacimiento</label>
					                    		<div class="input-group">
					                    			<div class="form-line" >
					                    				<input type="date" name="" class="form-control" name="paciente-fecha_nacimiento">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					            				<label>Rh</label>
					                			<div class="input-group">
					            					<div class="form-line" >
					                					<input type="text" name="" class="form-control" name="paciente-rh">
					                				</div>
					                			</div>
					                		</div>
					                    	<div class="col-sm-3">
					                    		<label>Genero</label>
					                            <select class="form-control" name="paciente-tipo_documento" required>
					                                <option>-- Seleccione --</option>
					                                <option name="CC" @if (old('tipo_documento'))=='Masculino' selected @endif>Masculino</option>
					                                <option name="TI" @if (old('tipo_documento'))=='Masculino' selected @endif>Femenino</option>
					                            </select>
					                    	</div>                    	
					                    </div>
					                    <div class="row clearfix"> 
					                    	<div class="col-sm-3">
					                    		<div class="form-line" >
					                				<label>Ciudad</label>
					                                <select class="form-control" name="paciente-ubicacion_id" data-live-search="true" required>
					                                    <option>-- Selecciona ubicacion --</option>
					                                    @foreach($ubicacion as $ubicacion)
					                                        <option value="{{$ubicacion->id}}">{{$ubicacion->ciudad}}</option>
					                                    @endforeach
					                                </select>
					                			</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Estudios</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                    				<input type="text" name="paciente-estudios" class="form-control">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Estado civil</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                					<input type="text" name="paciente-estado_civil" class="form-control">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Hijos</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                					<input type="number" name="paciente-hijos" class="form-control" min="0">
					                    			</div>
					                    		</div>
					                    	</div>                   	
					                    </div>
					                    <div class="form-group">
					                    	<label>Observaciones generales:</label>
					                        <div class="form-line">
					                            <textarea rows="4" class="form-control no-resize auto-growth" placeholder="Descripcion del paciente, rasgos fisicos, estado de salud, entre otros." name="paciente-observacion"></textarea>
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
					                                    <input name="acudiente-nombres" type="text" class="form-control" placeholder="Nombres" />
					                                </div>
					                            </div>
					                        </div>
					                        <div class="col-sm-6">
					                            <label>Apellidos</label>
					                            <div class="input-group" >
					                                <div class="form-line">
					                                    <input name="acudiente-apellidos" type="text" class="form-control" placeholder="Apellidos"/>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="row clearfix">
					                    	<div class="col-sm-6">
					                    		<label>Tipo de Documento</label>
					                            <select class="form-control" name="acudiente-tipo_documento" >
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
					                                    <input type="number" class="form-control date" name="acudiente-documento" placeholder="Numero Identidad" value="{{ old('documento') }}"/>
					                                </div>
					                            </div>
					                    	</div>
					                    </div>
					                    
					                    <div class="row clearfix"> 
					                    	<div class="col-sm-3">
					                    		<div class="form-line" >
					                				<label>Ciudad</label>
					                                <select class="form-control" name="acudiente-ubicacion_id" data-live-search="true" >
					                                    <option>-- Selecciona ubicacion --</option>
					                                    @foreach($ubicacion as $ubicacion)
					                                        <option value="{{$ubicacion->id}}">{{$ubicacion->ciudad}}</option>
					                                    @endforeach
					                                </select>
					                			</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Dirección</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                    				<input type="text" name="acudiente-direccion" class="form-control">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Telefono</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                					<input type="text" name="acudiente-telefono" class="form-control">
					                    			</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-3">
					                    		<label>Profesion</label>
					                    		<div class="input-group">
					                    			<div class="form-line">
					                					<input type="number" name="acudiente-profesion" class="form-control" min="0">
					                    			</div>
					                    		</div>
					                    	</div>                   	
					                    </div>
					                    <div class="row clearfix">
					                    	<div class="col-sm-6">
					                    		<label>Empresa donde labora</label>
					                    		<div class="input-group">
						                    		<div class="form-line">
						                    			<input type="text" name="acudiente-empresa_labora">
						                    		</div>
					                    		</div>
					                    	</div>
					                    	<div class="col-sm-6">
					                    		<label>Parentesco</label>
					                    		<div class="input-group">
						                    		<div class="form-line">
						                    			<input type="text" name="acudiente-parentesco">
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
                </form>
            </div>   
        </div>
    </div>
</div>

@endsection


