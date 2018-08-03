@extends('layouts.app')

@section('title')
    FMV | Cierre de Proceso
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
        CIERRE DE PROCESO
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
                                            <input type="text" class="form-control date" name="numero_hc" placeholder="No. Historia Clinica" value="{{ old('no_hc') }}"/>
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
                                            <input type="date" class="form-control date" name="fecha"  value="{{ old('fecha') }}"/>
                                        </div>
                                        @if ($errors->has('fecha'))
                                            <label class="error">{{ $errors->first('fecha') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-2">
                                    <label>No. Sesion</label>
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
                            <h2 class="card-inside-title">Motivo de Cierre.</h2>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <label>1. Cumplimiento de Objectivos:</label>
                                    <div class="input-group {{ $errors->has('cumplimiento') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('cumplimiento')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="cumplimiento"  value="{{ old('cumplimiento') }}"/>
                                        </div>
                                        @if ($errors->has('cumplimiento'))
                                            <label class="error">{{ $errors->first('cumplimiento') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <label>2. Cierre Semestral:</label>
                                    <div class="input-group {{ $errors->has('cierre_semestral') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('cierre_semestral')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date"  name="cierre_semestral"  value="{{ old('cierre_semestral') }}"/>
                                        </div>
                                        @if ($errors->has('cierre_semestral'))
                                            <label class="error">{{ $errors->first('cierre_semestral') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <label>3. Otros:</label>
                                    <div class="input-group {{ $errors->has('otros') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('otros')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="otros" value="{{ old('otros') }}"/>
                                        </div>
                                        @if ($errors->has('otros'))
                                            <label class="error">{{ $errors->first('otros') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Evaluacion del Proceso Consultante.</h2>
                                    <div class="form-group {{ $errors->has('e_p_c') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('e_p_c')) class="form-line error" @endif class="form-line">
                                                <textarea rows="5" class="form-control no-resize" name="e_p_c" placeholder="" value="{{ old('e_p_c') }}"></textarea>
                                        </div>
                                        @if ($errors->has('e_p_c'))
                                            <label class="error">{{ $errors->first('e_p_c') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Evaluacion del Proceso Psicologico.</h2>
                                    <div class="form-group {{ $errors->has('e_p_p') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('e_p_p')) class="form-line error" @endif class="form-line">
                                            <textarea rows="5" class="form-control no-resize" name="e_p_p" placeholder="" value="{{ old('e_p_p') }}"></textarea>
                                        </div>
                                        @if ($errors->has('e_p_p'))
                                            <label class="error">{{ $errors->first('e_p_p') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
