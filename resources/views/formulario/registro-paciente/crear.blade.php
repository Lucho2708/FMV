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
                <h2>
                    Nuevo registro.
                    
                </h2>
            </div>
            <div class="body">
                <form method="POST" action="{{ route('registro.store') }}" >
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                	<h2 class="card-inside-title">Datos del paciente</h2>
                	<hr>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <label>Nombres:</label>
                            <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}" >
                                <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                    <input name="nombres" type="text" class="form-control" placeholder="Nombres" required value="{{ old('nombres') }}"/>
                                </div>
                                @if ($errors->has('nombres'))
                                    <label class="error">{{ $errors->first('nombres') }}</label> 
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Apellidos:</label>
                            <div class="input-group {{ $errors->has('apellidos') ? ' has-error' : '' }}" >
                                <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                    <input name="apellidos" type="text" class="form-control" placeholder="Apellidos" required value="{{ old('apellidos') }}"/>
                                </div>
                                @if ($errors->has('apellidos'))
                                    <label class="error">{{ $errors->first('apellidos') }}</label> 
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                    	<div class="col-sm-6">
                    		<label>
                    			Tipo de Documento:
                    		</label>
                            <select class="form-control" name="tipo_documento" required>
                                <option>-- Seleccione --</option>
                                <option name="CC" @if (old('tipo_documento'))=='CC' selected @endif>CC</option>
                                <option name="TI" @if (old('tipo_documento'))=='TI' selected @endif>TI</option>
                                <option name="CE" @if (old('tipo_documento'))=='CE' selected @endif>CE</option>
                                <option name="RC" @if (old('tipo_documento'))=='RC' selected @endif>RC</option>
                            </select>
                            @if ($errors->has('tipo_documento'))
                                <label class="error">{{ $errors->first('tipo_documento') }}</label>
                            @endif
                    	</div>
                    	<div class="col-sm-6">
                    		<label>
                    			No. Documento:
                    		</label>
                            <div class="input-group {{ $errors->has('documento') ? ' has-error' : '' }}" >
                                <div  @if ($errors->has('documento')) class="form-line error" @endif class="form-line">
                                    <input type="number" class="form-control date" name="documento" placeholder="Numero Identidad" value="{{ old('documento') }}"/>
                                </div>
                                @if ($errors->has('documento'))
                                    <label class="error">{{ $errors->first('documento') }}</label>
                                @endif
                            </div>
                    	</div>
                    </div>

                    <div class="row clearfix">
                    	<div class="col-sm-4">
                    		<label>
                    			Fecha de nacimiento:
                    		</label>
                    		<div class="input-group">
                    			<div class="form-line" >
                    				<input type="date" name="" class="form-control">
                    			</div>
                    		</div>
                    	</div>
                    	<div class="col-sm-4">
                    		
            				<label>
            					Rh:
            				</label>
                			<div class="input-group">
            					<div class="form-line" >
                					<input type="text" name="" class="form-control">
                				</div>
                			</div>
                		</div>
                    	<div class="col-sm-4">
                    		<label>
                    			Genero:
                    		</label>
                            <select class="form-control" name="tipo_documento" required>
                                <option>-- Seleccione --</option>
                                <option name="CC" @if (old('tipo_documento'))=='Masculino' selected @endif>Masculino</option>
                                <option name="TI" @if (old('tipo_documento'))=='Masculino' selected @endif>Femenino</option>
                            </select>
                            @if ($errors->has('tipo_documento'))
                                <label class="error">{{ $errors->first('tipo_documento') }}</label>
                            @endif
                    	</div>
                    </div>
                    
                    <div class="row clearfix">
                    	<div class="col-sm-4">
                    		<div class="form-line" >
                				<label>
                					Ciudad:
                				</label>
                                <select class="form-control" name="ubicacion_id" data-live-search="true" required>
                                    <option>-- Selecciona ubicacion --</option>
                                    @foreach($ubicacion as $ubicacion)
                                        <option value="{{$ubicacion->id}}">{{$ubicacion->ciudad}}</option>
                                    @endforeach
                                </select>
                			</div>
                    	</div>
                    	<div class="col-sm-4">
                    		<div class="input-group">
                    			<div class="form-line">
                    				<label>
                    					
                    				</label>
                    			</div>
                    		</div>
                    	</div>
                    	<div class="col-sm-4">
                    		<div class="input-group">
                    			<div class="form-line">
                    				<label>
                    					
                    				</label>
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