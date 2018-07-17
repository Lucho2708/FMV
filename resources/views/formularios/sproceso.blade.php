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
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" name="numero" class="form-control" placeholder="No. Historia Clinica">
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
                                <div class="col-md-3">
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
                            <h2 class="card-inside-title">1.Personas que Asistieron.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="1" class="form-control no-resize" name="asistentes" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">2.Objectivo a Trabajar.</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="objectivo_trabajar" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">3.Resumen de Sesion.</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="resumen" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">4.Hipotesis.</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="hipotesis" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">5.Tarea:</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2" class="form-control no-resize" name="tarea" placeholder=""></textarea>
                                        </div>
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
