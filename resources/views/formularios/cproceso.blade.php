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
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="numero_hc" placeholder="No. Historia Clinica">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="fecha" placeholder="dd/mm/aaaa">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" name="sesion" class="form-control date" placeholder="No. Sesion">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h2 class="card-inside-title">Motivo de Cierre.</h2>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="cumplimiento" placeholder="1. Cumplimiento de Objectivos:">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date"  name="cierre_semestral" placeholder="2. Cierre Semestral:">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="otros" placeholder="3. Otros:">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h2 class="card-inside-title">Evaluacion del Proceso Consultante.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="5" class="form-control no-resize" name="e_p_c" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h2 class="card-inside-title">Evaluacion del Proceso Psicologico.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="5" class="form-control no-resize" name="e_p_p" placeholder=""></textarea>
                                        </div>
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
