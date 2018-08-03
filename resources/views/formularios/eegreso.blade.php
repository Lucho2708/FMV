@extends('layouts.app')

@section('title')
    FMV | Epicrisis de Egreso
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
        EPICRISIS DE EGRESO
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
                            <br>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th {{ $errors->has('fecha') ? ' has-error' : '' }} >
                                            <div  @if ($errors->has('fecha')) class="form-line error" @endif class="form-line">
                                                <input align="right" type="date" name="fecha" class="form-control date"  required value="{{ old('fecha') }}" />
                                            </div>
                                            @if ($errors->has('fecha'))
                                                <label class="error">{{ $errors->first('fecha') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Nombres</th>
                                        <th {{ $errors->has('nombres') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                               <input type="text" name="nombres" class="form-control" name="names" required value="{{ old('nombres') }}"/>
                                            </div>
                                            @if ($errors->has('nombres'))
                                                <label class="error">{{ $errors->first('nombres') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Apellidos</th>
                                        <th {{ $errors->has('apellidos') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="apellidos" class="form-control" name="names" required value="{{ old('apellidos') }}"/>
                                            </div>
                                            @if ($errors->has('apellidos'))
                                                <label class="error">{{ $errors->first('apellidos') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Sexo</th>
                                        <th>
                                            <select class="form-control" name="genero">
                                                <option>-- Seleccione Sexo --</option>
                                                <option name="Masculino" @if (old('genero'))=='Masculino' selected @endif>Masculino</option>
                                                <option name="Femenino" @if (old('genero'))=='Femenino' selected @endif>Femenino</option>
                                            </select>
                                            @if ($errors->has('genero'))
                                                <label class="error">{{ $errors->first('genero') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Edad</th>
                                        <th {{ $errors->has('edad') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('edad')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="edad" class="form-control" required value="{{ old('edad') }}"/>
                                            </div>
                                            @if ($errors->has('edad'))
                                                <label class="error">{{ $errors->first('edad') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Linea de Pago</th>
                                        <th>
                                            <select class="form-control" name="linea_pago">
                                                <option>-- Seleccione --</option>
                                                <option name="efectivo" @if (old('linea_pago'))=='efectivo' selected @endif>Efectivo</option>
                                                <option name="banco"  @if (old('linea_pago'))=='banco' selected @endif>Consignacion Bancaria</option>
                                                <option name="cheque"  @if (old('linea_pago'))=='cheque' selected @endif>Cheque</option>
                                            </select>
                                            @if ($errors->has('linea_pago'))
                                                <label class="error">{{ $errors->first('linea_pago') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Servicio</th>
                                        <th {{ $errors->has('servicio') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('servicio')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="servicio" class="form-control" required value="{{ old('servicio') }}"/>
                                            </div>
                                            @if ($errors->has('servicio'))
                                                <label class="error">{{ $errors->first('servicio') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2 class="card-inside-title">EGRESO</h2>
                            <div class="row clearfix">
                                <div class="body table-responsive">
                                    <table  class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td  colspan="3" align="center">Condicion del Paciente a la Salida</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Incapacidad</td>
                                            <td>
                                                <select class="form-control" name="incapacidad">
                                                    <option>seleccion</option>
                                                    <option name="si" @if (old('incapacidad'))=='si' selected @endif>Si</option>
                                                    <option name="no" @if (old('incapacidad'))=='no' selected @endif>No</option>
                                                </select>
                                                @if ($errors->has('incapacidad'))
                                                    <label class="error">{{ $errors->first('incapacidad') }}</label>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Estado de Salud</td>
                                            <td>
                                                <select class="form-control" name="estado_salud">
                                                    <option>seleccion</option>
                                                    <option name="vivo" @if (old('estado_salud'))=='vivo' selected @endif >vivo</option>
                                                    <option name="muerto" @if (old('estado_salud'))=='muerto' selected @endif>muerto</option>
                                                    <option name="remitido" @if (old('estado_salud'))=='remitido' selected @endif>remitido</option>
                                                    <option name="egreso voluntario" @if (old('estado_salud'))=='egreso voluntario' selected @endif>egreso voluntario</option>
                                                </select>
                                                @if ($errors->has('estado_salud'))
                                                    <label class="error">{{ $errors->first('estado_salud') }}</label>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Plan Manejo Ambulatorio (Recomendado).</h2>
                                    <div class="form-group {{ $errors->has('plan_mejora') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('plan_mejora')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="plan_mejora_ambulatorio" required value="{{ old('plan_mejora') }}"></textarea>
                                        </div>
                                        @if ($errors->has('plan_mejora'))
                                            <label class="error">{{ $errors->first('plan_mejora') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Medicamentos.</h2>
                                    <div class="form-group {{ $errors->has('medicamentos') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('medicamentos')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="medicamentos" placeholder="" required value="{{ old('medicamentos') }}"></textarea>
                                        </div>
                                        @if ($errors->has('medicamentos'))
                                            <label class="error">{{ $errors->first('medicamentos') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
