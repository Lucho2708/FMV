@extends('layouts.app')

@section('title')
    FMV | Seguimieno Proceso
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
        SEGUIMIENTO DE PROCESO
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
                                    <label>No. Historia Clinica</label>
                                    <div class="input-group {{ $errors->has('no_hc') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('no_hc')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="no_hc" placeholder="No. Historia Clinica" value="{{ old('no_hc') }}"/>
                                        </div>
                                        @if ($errors->has('no_hc'))
                                            <label class="error">{{ $errors->first('no_hc') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-3">
                                    <label>Fecha</label>
                                    <div class="input-group {{ $errors->has('fecha') ? ' has-error' : '' }}" >
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div  @if ($errors->has('fecha')) class="form-line error" @endif class="form-line">
                                            <input type="date" class="form-control date" name="fecha" placeholder="fecha" value="{{ old('fecha') }}"/>
                                        </div>
                                        @if ($errors->has('fecha'))
                                            <label class="error">{{ $errors->first('fecha') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-2">
                                    <label>Sesion</label>
                                    <div class="input-group {{ $errors->has('sesion') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('sesion')) class="form-line error" @endif class="form-line">
                                            <input type="text" name="sesion" class="form-control date" placeholder="No. Sesion" value="{{ old('sesion') }}"/>
                                        </div>
                                        @if ($errors->has('sesion'))
                                            <label class="error">{{ $errors->first('sesion') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h2 class="card-inside-title">1.Personas que Asistieron.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('asistentes') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('asistentes')) class="form-line error" @endif class="form-line">
                                            <textarea rows="1" class="form-control no-resize" name="asistentes" placeholder="" value="{{ old('asistentes') }}"></textarea>
                                        </div>
                                        @if ($errors->has('asistentes'))
                                            <label class="error">{{ $errors->first('asistentes') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">2.Objectivo a Trabajar.</h2>
                                    <div class="form-group {{ $errors->has('objectivo_trabajar') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('objectivo_trabajar')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="objectivo_trabajar" placeholder="" value="{{ old('objectivo_trabajar') }}"></textarea>
                                        </div>
                                        @if ($errors->has('objectivo_trabajar'))
                                            <label class="error">{{ $errors->first('objectivo_trabajar') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">3.Resumen de Sesion.</h2>
                                    <div class="form-group {{ $errors->has('resumen') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('resumen')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="resumen" placeholder="" value="{{ old('resumen') }}"></textarea>
                                        </div>
                                        @if ($errors->has('resumen'))
                                            <label class="error">{{ $errors->first('resumen') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">4.Hipotesis.</h2>
                                    <div class="form-group {{ $errors->has('hipotesis') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('hipotesis')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="hipotesis" placeholder="" value="{{ old('hipotesis') }}"></textarea>
                                        </div>
                                        @if ($errors->has('hipotesis'))
                                            <label class="error">{{ $errors->first('hipotesis') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">5.Tarea:</h2>
                                    <div class="form-group {{ $errors->has('tarea') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('tarea')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="tarea" placeholder="" value="{{ old('tarea') }}"></textarea>
                                        </div>
                                        @if ($errors->has('tarea'))
                                            <label class="error">{{ $errors->first('tarea') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
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
