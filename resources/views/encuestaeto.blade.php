@extends('layouts.app')

@section('title')
    FMV | Terapia Ocupacional MDH
@endsection

@section('css')
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
<div class="block-header">
    <h1>ENCUESTA MODELO DE OCUPACION HUMANA(MDH)</h1>
        <h1 align="center">TERAPIA OCUPACIONAL</h1>
</div>
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 class="card-inside-title">Datos Personales</h2>
            </div>
            <div class="body">
                <form>
                    <div id="form_validation">
                        <div class="row clearfix">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="nombres"  placeholder="Nombres" value="{{ old('nombres') }}"/>
                                    </div>
                                    @if ($errors->has('nombres'))
                                        <label class="error">{{ $errors->first('nombres') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="input-group {{ $errors->has('apellidos') ? ' has-error' : '' }}" >
                                    <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}"/>
                                    </div>
                                    @if ($errors->has('apellidos'))
                                        <label class="error">{{ $errors->first('apellidos') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="input-group-lg">
                            <div class="row clearfix">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <div class="input-group"{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }} >
                                        <div  @if ($errors->has('fecha_nacimiento')) class="form-line error" @endif class="form-line">
                                            <input align="right" type="text" name="fecha_nacimiento" class="datepicker form-control"  placeholder="Fecha Nacimiento" required value="{{ old('fecha_nacimiento') }}" />
                                        </div>
                                        @if ($errors->has('fecha_nacimiento'))
                                            <label class="error">{{ $errors->first('fecha_nacimiento') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('edad') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('edad')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="edad" placeholder="Edad" value="{{ old('edad') }}"/>
                                        </div>
                                        @if ($errors->has('edad'))
                                            <label class="error">{{ $errors->first('edad') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <select class="form-control" name="estado_civil" required>
                                        <option>-- Estado Civil --</option>
                                        <option name="soltero(a)" @if (old('estado_civil'))=='soltero(a)' selected @endif>Soltero(a)</option>
                                        <option name="casado(a)" @if (old('estado_civil'))=='casado(a)' selected @endif>Casado(a)</option>
                                        <option name="viudo(a)" @if (old('estado_civil'))=='viudo(a)' selected @endif>Viudo(a)</option>
                                        <option name="union libre" @if (old('estado_civil'))=='union libre' selected @endif>Union Libre</option>
                                    </select>
                                    @if ($errors->has('estado_civil'))
                                        <label class="error">{{ $errors->first('estado_civil') }}</label>
                                    @endif
                                </div>
                                <select class="form-control" name="estudios">
                                    <option>-- Nivel Educativo --</option>
                                    <option name="primaria" @if (old('estudios'))=='primaria' selected @endif>Primaria</option>
                                    <option name="secundaria" @if (old('estudios'))=='secundaria' selected @endif>Secundaria</option>
                                    <option name="universitaria" @if (old('estudios'))=='universitaria' selected @endif>Universitaria</option>
                                    <option name="ninguno" @if (old('estudios'))=='ninguno' selected @endif>Ninguno</option>
                                </select>
                                @if ($errors->has('estudios'))
                                    <label class="error">{{ $errors->first('estudios') }}</label>
                                @endif
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('emfermedad_actual') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('emfermedad_actual')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="emfermedad_actual" placeholder="Emfermedad Actual"value="{{ old('emfermedad_actual') }}"/>
                                        </div>
                                        @if ($errors->has('emfermedad_actual'))
                                            <label class="error">{{ $errors->first('emfermedad_actual') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group {{ $errors->has('emfermedad natural') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('emfermedad natural')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="emfermedad natural" placeholder="Emfermedad Natural" value="{{ old('emfermedad natural') }}"/>
                                        </div>
                                        @if ($errors->has('emfermedad natural'))
                                            <label class="error">{{ $errors->first('emfermedad natural') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">1. Que actividades le gusta hacer en su tiempo libre</h2>
                            <div class="demo-radio-button" name="actividades">
                                <input name="group1" type="radio" id="radio_1" class="with-gap radio-col-green" />
                                <label for="radio_1">Caminar</label>
                                <input name="group2" type="radio" id="radio_2" class="with-gap radio-col-green" />
                                <label for="radio_2">Escuchar música</label>
                                <input name="group3" type="radio" id="radio_3" class="with-gap radio-col-green" />
                                <label for="radio_3">Leer</label>
                                <input name="group4" type="radio" id="radio_4" class="with-gap radio-col-green" />
                                <label for="radio_4">Ver televisión</label>
                                <input name="group5" type="radio" id="radio_5" class="with-gap radio-col-green" />
                                <label for="radio_5">Jugar</label>
                                <input name="group6" type="radio" id="radio_6" class="with-gap radio-col-green" />
                                <label for="radio_6">Bailar</label>
                                <input name="group7" type="radio" id="radio_7" class="with-gap radio-col-green" />
                                <label for="radio_7">Hacer deporte</label>
                                <input name="group8" type="radio" id="radio_8" class="with-gap radio-col-green" />
                                <label for="radio_8">Bordar</label>
                                <input name="group9" type="radio" id="radio_9" class="with-gap radio-col-green" />
                                <label for="radio_9">Pintar</label>
                                <input name="group10" type="radio" id="radio_10" class="with-gap radio-col-green" />
                                <label for="radio_10">Orar</label>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Otros.?">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Cuales.?">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">2. Con que frecuencia los realiza?</h2>
                            <div class="demo-radio-button">
                                <input name="group11" type="radio" id="radio_11" class="with-gap radio-col-red" />
                                <label for="radio_11">Siempre</label>
                                <input name="group11" type="radio" id="radio_12" class="with-gap radio-col-red" />
                                <label for="radio_12">Casi siempre</label>
                                <input name="group11" type="radio" id="radio_13" class="with-gap radio-col-red" />
                                <label for="radio_13">Algunas Veces</label>
                                <input name="group11" type="radio" id="radio_14" class="with-gap radio-col-red" />
                                <label for="radio_14">Nunca</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title">3. Cuenta con grupo Familiar?</h2>
                            <div class="demo-radio-button">
                                <input name="group12" type="radio" id="radio_15" class="with-gap radio-col-blue" />
                                <label for="radio_15">Si</label>
                                <input name="group12" type="radio" id="radio_16" class="with-gap radio-col-blue" />
                                <label for="radio_16">No</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title">4. Como es la relación con sus compañeros?</h2>
                            <div class="demo-radio-button">
                                <input name="group13" type="radio" id="radio_17" class="with-gap radio-col-blue" />
                                <label for="radio_17">Buena</label>
                                <input name="group13" type="radio" id="radio_18" class="with-gap radio-col-blue" />
                                <label for="radio_18">Mala</label>
                                <input name="group13" type="radio" id="radio_19" class="with-gap radio-col-blue" />
                                <label for="radio_19">Regular</label>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Porque.?">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">5. Realiza actividades creativas con sus compañeros?</h2>
                            <div class="demo-radio-button">
                                <input name="group14" type="radio" id="radio_20" class="with-gap radio-col-yellow" />
                                <label for="radio_20">Siempre</label>
                                <input name="group14" type="radio" id="radio_21" class="with-gap radio-col-yellow" />
                                <label for="radio_21">Casi siempre</label>
                                <input name="group14" type="radio" id="radio_22" class="with-gap radio-col-yellow"/>
                                <label for="radio_22">Algunas Veces</label>
                                <input name="group14" type="radio" id="radio_23" class="with-gap radio-col-yellow" />
                                <label for="radio_23">Nunca</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title">6. Se desplaza por si solo?</h2>
                            <div class="demo-radio-button">
                                <input name="group15" type="radio" id="radio_24" class="with-gap radio-col-orange"  />
                                <label for="radio_24">Si</label>
                                <input name="group15" type="radio" id="radio_25" class="with-gap radio-col-orange"  />
                                <label for="radio_25">No</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title">7. Realiza las actividades de alimentación, higiene, vestido en forma independiente?</h2>
                            <div class="demo-radio-button">
                                <input name="group16" type="radio" id="radio_26" class="with-gap radio-col-purple" />
                                <label for="radio_26">Si</label>
                                <input name="group16" type="radio" id="radio_27" class="with-gap radio-col-purple" />
                                <label for="radio_27">No</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title">8. Expresa con facilidad sus pensamientos y sentimientos dentro de su entorno?</h2>
                            <div class="demo-radio-button">
                                <input name="group17" type="radio" id="radio_28" class="with-gap radio-col-indigo" />
                                <label for="radio_28">Si</label>
                                <input name="group17" type="radio" id="radio_29" class="with-gap radio-col-indigo"/>
                                <label for="radio_29">No</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title">9. Que valores resalta de usted?</h2>
                            <div class="demo-radio-button">
                                <input name="group18" type="radio" id="radio_30" class="with-gap radio-col-yellow" />
                                <label for="radio_30">Solidaridad</label>
                                <input name="group19" type="radio" id="radio_31" class="with-gap radio-col-yellow" />
                                <label for="radio_31">Bondad</label>
                                <input name="group20" type="radio" id="radio_32" class="with-gap radio-col-yellow"/>
                                <label for="radio_32">Tolerancia</label>
                                <input name="group21" type="radio" id="radio_33" class="with-gap radio-col-yellow" />
                                <label for="radio_33">Generosidad</label>
                                <input name="group22" type="radio" id="radio_34" class="with-gap radio-col-yellow" />
                                <label for="radio_34">Humildad</label>
                                <input name="group23" type="radio" id="radio_35" class="with-gap radio-col-yellow" />
                                <label for="radio_35">Respeto</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title" align="justify">10. Cuenta con materiales y herramientas suficientes para el desempeño de las actividades ocupacionales dentro del taller de terapia ocupacional?</h2>
                            <div class="demo-radio-button">
                                <input name="group24" type="radio" id="radio_36" class="with-gap radio-col-indigo" />
                                <label for="radio_36">Si</label>
                                <input name="group24" type="radio" id="radio_37" class="with-gap radio-col-indigo"/>
                                <label for="radio_37">No</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title">11. Se relaciona fácilmente con sus compañeros?</h2>
                            <div class="demo-radio-button">
                                <input name="group25" type="radio" id="radio_38" class="with-gap radio-col-indigo" />
                                <label for="radio_38">Si</label>
                                <input name="group25" type="radio" id="radio_39" class="with-gap radio-col-indigo"/>
                                <label for="radio_39">No</label>
                            </div>
                            <br>
                            <h2 class="card-inside-title">12. Participe constantemente de actividades que se realicen dentro de la institución?</h2>
                            <div class="demo-radio-button">
                                <input name="group26" type="radio" id="radio_40" class="with-gap radio-col-indigo" />
                                <label for="radio_40">Si</label>
                                <input name="group26" type="radio" id="radio_41" class="with-gap radio-col-indigo"/>
                                <label for="radio_41">No</label>
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
