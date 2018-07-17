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
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nombres"  placeholder="Nombres">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="date" class="form-control date" name="fecha" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="titulo_dia" placeholder="TItulo del Dia">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="5" class="form-control no-resize" name="cronica" placeholder="Cronica : ......"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="estado_inicial" placeholder="Estado de Animo Inicial: ......"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="estado_final" placeholder="Estado de Animo Final: ......"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h2 class="card-inside-title" align="center">Experiencias Positivas</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="experiencias_positivas"  placeholder="1......."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="experiencias_positivas"  placeholder="2......."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title" align="center">Experiencias Negativas</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="experiencias_negativas"  placeholder="1......."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="experiencias_negativas" placeholder="2......."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="compromiso" placeholder="Que compromiso hago para cambiar mi forma de actuar"></textarea>
                                        </div>
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
