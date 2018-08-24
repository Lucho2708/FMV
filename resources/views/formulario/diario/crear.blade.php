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
                    Diario terapeutico 
                </h2>
            </div>
            <div class="body">
            	<div class="row clearfixr">
            		{!! Form::open(['route' => 'diario.store', 'method' => 'POST' ]) !!}
            		<div class="col-sm-12">
	            		<div class="col-sm-4">
	            			 <img src="{{ asset('/images/user.png') }}"  width="100%">
	            		</div>
	            		<div class="col-sm-8">
	            			<h2>{{$paciente->nombres}} {{$paciente->apellidos}}</h2>
	            			<hr>
	            			<p>{{$paciente->tipo_documento}} : {{$paciente->documento}} </p>
	            			<p>Estado civil: {{$paciente->estado_civil}}</p>
	            			<p>Ubicacion: {{$paciente->ubicacion->ciudad}}</p>
	            			<p>Acudiente: {{$paciente->acudiente->nombres}} {{$paciente->acudiente->apellidos}}</p>
	            		</div>
            		</div>

            		<div class="col-sm-12">
            			<hr>
	            		<div class="col-sm-12">
	            			<label>Titulo de la sesión</label>
	            			<div class="input-group">
	            				<div class="form-line">
		            				<textarea rows="1" class="form-control no-resize auto-growth"></textarea>
	            				</div>
	            			</div>
	            		</div>
	            		<div class="col-sm-12">
	            			<label>Cronica</label>
	            			<div class="input-group">
	            				<div class="form-line">
		            				<textarea rows="1" class="form-control no-resize auto-growth"></textarea>
	            				</div>
	            			</div>
	            		</div>
	            		<div class="col-sm-6">
	            			<label>Experiencias positivas</label>
	            			<div class="input-group">
	            				<div class="form-line">
		            				<textarea rows="1" class="form-control no-resize auto-growth"></textarea>
	            				</div>
	            			</div>
	            		</div>
	            		<div class="col-sm-6">
	            			<label>Experiencias negativas</label>
	            			<div class="input-group">
	            				<div class="form-line">
		            				<textarea rows="1" class="form-control no-resize auto-growth"></textarea>
	            				</div>
	            			</div>
	            		</div>
	            		<div class="col-sm-12">
	            			<label>Que compromiso hago para cambiar mi forma de actuar?</label>
	            			<div class="input-group">
	            				<div class="form-line">
		            				<textarea rows="1" class="form-control no-resize auto-growth"></textarea>
	            				</div>
	            			</div>
	            		</div>
	            		
            		</div>
            		<div class="col-sm-12">
            			<button class="btn btn-primary waves-effect" type="submit">Guardar</button>
                    	<button class="btn btn-danger waves-effect" type="reset">Cancelar</button>
            		</div>
					
                    {!! Form::close() !!}
            	</div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('/plugins/autosize/autosize.js') }}"></script>
<script src="{{ asset('/js/pages/forms/basic-form-elements.js') }}"></script>
@endsection