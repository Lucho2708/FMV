@extends('layouts.app')

@section('title')
    FMV | Diario Terapeutico
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
        DIARIO TERAPEUTICO
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
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="input-group {{ $errors->has('fecha') ? ' has-error' : '' }}" >
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div @if ($errors->has('fecha')) class="form-line error" @endif class="form-line">
                                            <input type="date" class="form-control date" name="fecha" placeholder="" value="{{ old('fecha') }}"/>
                                        </div>
                                        @if ($errors->has('fecha'))
                                            <label class="error">{{ $errors->first('fecha') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group {{ $errors->has('titulo_dia') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="titulo_dia" placeholder="TItulo del Dia" value="{{ old('titulo_dia') }}"/>
                                        </div>
                                        @if ($errors->has('titulo_dia'))
                                            <label class="error">{{ $errors->first('titulo_dia') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('cronica') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('cronica')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="cronica" placeholder="Cronica : ......" value="{{ old('cronica') }}"></textarea>
                                        </div>
                                        @if ($errors->has('cronica'))
                                            <label class="error">{{ $errors->first('cronica') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('estado_inicial') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('estado_inicial')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="estado_inicial" placeholder="Estado de Animo Inicial: ......" value="{{ old('estado_inicial') }}"></textarea>
                                        </div>
                                        @if ($errors->has('estado_inicial'))
                                            <label class="error">{{ $errors->first('estado_inicial') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('estado_final') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('estado_final')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="estado_final" placeholder="Estado de Animo Final: ......" value="{{ old('estado_final') }}"></textarea>
                                        </div>
                                        @if ($errors->has('estado_final'))
                                            <label class="error">{{ $errors->first('estado_final') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title" align="center">Experiencias Positivas</h2>
                                    <div class="form-group {{ $errors->has('experiencias_positivas') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('experiencias_positivas')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="experiencias_positivas"  placeholder="1......." value="{{ old('experiencias_positivas') }}"></textarea>
                                        </div>
                                        @if ($errors->has('experiencias_positivas'))
                                            <label class="error">{{ $errors->first('experiencias_positivas') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title" align="center">Experiencias Negativas</h2>
                                    <div class="form-group {{ $errors->has('experiencias_negativas') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('experiencias_negativas')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="experiencias_negativas"  placeholder="1......." value="{{ old('experiencias_negativas') }}"></textarea>
                                        </div>
                                        @if ($errors->has('experiencias_negativas'))
                                            <label class="error">{{ $errors->first('experiencias_negativas') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('compromiso') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('compromiso')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="compromiso" placeholder="Que compromiso hago para cambiar mi forma de actuar" value="{{ old('compromiso') }}"></textarea>
                                        </div>
                                        @if ($errors->has('compromiso'))
                                            <label class="error">{{ $errors->first('compromiso') }}</label>
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
