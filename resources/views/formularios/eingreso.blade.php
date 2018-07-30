@extends('layouts.app')

@section('title')
    FMV | Epicrisis de Ingreso
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
        EPICRISIS DE INGRESO
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
                                                <input align="right" type="text" name="fecha" class="datepicker form-control"  required value="{{ old('fecha') }}" />
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
                                                <input type="text" name="nombres" class="form-control" name="nombres" required value="{{ old('nombres') }}"/>
                                            </div>
                                            @if ($errors->has('nombres'))
                                                <label class="error">{{ $errors->first('fecha') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Apellidos</th>
                                        <th {{ $errors->has('apellidos') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="apellidos" class="form-control" name="apellidos" required value="{{ old('apellidos') }}"/>
                                            </div>
                                            @if ($errors->has('apellidos'))
                                                <label class="error">{{ $errors->first('apellidos') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Documento</th>
                                        <th {{ $errors->has('documento') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('documento')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="documento" class="form-control" value="{{ old('documento') }}"/>
                                            </div>
                                            @if ($errors->has('documento'))
                                                <label class="error">{{ $errors->first('documento') }}</label>
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
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Motivo de Consulta o Solicitud de Servicio</h2>
                                    <div class="form-group {{ $errors->has('motivo_consulta') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('motivo_consulta')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2"  name="motivo_consulta" class="form-control no-resize" required value="{{ old('motivo_consulta') }}"></textarea>
                                        </div>
                                        @if ($errors->has('motivo_consulta'))
                                            <label class="error">{{ $errors->first('motivo_consulta') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Emfermedad Actual</h2>
                                    <div class="form-group {{ $errors->has('emfermedad_actual') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('emfermedad_actual')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" name="emfermedad_actual" class="form-control no-resize" required value="{{ old('emfermedad_actual') }}"></textarea>
                                        </div>
                                        @if ($errors->has('emfermedad_actual'))
                                            <label class="error">{{ $errors->first('emfermedad_actual') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Antecedentes</h2>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Patologicos</th>
                                        <th {{ $errors->has('patologicos') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('patologicos')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="patologicos" class="form-control" required value="{{ old('patologicos') }}"/>
                                            </div>
                                            @if ($errors->has('patologicos'))
                                                <label class="error">{{ $errors->first('patologicos') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Quirurjicos</th>
                                        <th {{ $errors->has('quirurjicos') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('quirurjicos')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="quirurjicos" class="form-control" required value="{{ old('quirurjicos') }}"/>
                                            </div>
                                            @if ($errors->has('quirurjicos'))
                                                <label class="error">{{ $errors->first('quirurjicos') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Toxico Alergicos</th>
                                        <th {{ $errors->has('toxico_alergicos') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('toxico_alergicos')) class="form-line error" @endif class="form-line">
                                                 <input type="text"  name="toxico_alergicos" class="form-control" required value="{{ old('toxico_alergicos') }}"/>
                                            </div>
                                            @if ($errors->has('toxico_alergicos'))
                                                <label class="error">{{ $errors->first('toxico_alergicos') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Farmacologicos</th>
                                        <th {{ $errors->has('farmacologicos') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('farmacologicos')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="farmacologicos" class="form-control" required value="{{ old('farmacologicos') }}"/>
                                            </div>
                                            @if ($errors->has('farmacologicos'))
                                                <label class="error">{{ $errors->first('farmacologicos') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Inmunisacion</th>
                                        <th {{ $errors->has('inmunisacion') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('inmunisacion')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="inmunisacion" class="form-control" required value="{{ old('inmunisacion') }}"/>
                                            </div>
                                            @if ($errors->has('inmunisacion'))
                                                <label class="error">{{ $errors->first('inmunisacion') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Transfusion</th>
                                        <th {{ $errors->has('transfusion') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('transfusion')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="transfusion" class="form-control" required value="{{ old('transfusion') }}"/>
                                            </div>
                                            @if ($errors->has('transfusion'))
                                                <label class="error">{{ $errors->first('transfusion') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Ginecobstetricios</th>
                                        <th {{ $errors->has('ginecobstetricios') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('ginecobstetricios')) class="form-line error" @endif class="form-line">
                                                <textarea rows="2" name="ginecobstetricios" class="form-control no-resize"required value="{{ old('ginecobstetricios') }}"></textarea>
                                            </div>
                                            @if ($errors->has('ginecobstetricios'))
                                                <label class="error">{{ $errors->first('ginecobstetricios') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Menarquias</th>
                                        <th {{ $errors->has('menarquias') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('menarquias')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="menarquias" class="form-control" required value="{{ old('menarquias') }}"/>
                                            </div>
                                            @if ($errors->has('menarquias'))
                                                <label class="error">{{ $errors->first('menarquias') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Ciclos</th>
                                        <th {{ $errors->has('ciclos') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('ciclos')) class="form-line error" @endif class="form-line">
                                                 <input type="text" name="ciclos" class="form-control" required value="{{ old('ciclos') }}"/>
                                            </div>
                                            @if ($errors->has('ciclos'))
                                                <label class="error">{{ $errors->first('ciclos') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Regular</th>
                                        <th>
                                            <select class="form-control" name="regular">
                                                <option name="si" @if (old('regular'))=='si' selected @endif>Si</option>
                                                <option name="no" @if (old('regular'))=='no' selected @endif>No</option>
                                            </select>
                                            @if ($errors->has('regular'))
                                                <label class="error">{{ $errors->first('regular') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Planificacion ETS</th>
                                        <th>
                                            <select class="form-control" name="planificacion">
                                                <option>seleccion</option>
                                                <option name="g" @if (old('planificacion'))=='g' selected @endif>G</option>
                                                <option name="p" @if (old('planificacion'))=='p' selected @endif>P</option>
                                                <option name="c" @if (old('planificacion'))=='c' selected @endif>C</option>
                                                <option name="a" @if (old('planificacion'))=='a' selected @endif>A</option>
                                                <option name="v" @if (old('planificacion'))=='v' selected @endif>V</option>
                                                <option name="o" @if (old('planificacion'))=='o' selected @endif>O</option>
                                                <option name="e" @if (old('planificacion'))=='e' selected @endif>E</option>
                                                <option name="mola" @if (old('planificacion'))=='mola' selected @endif>MOLA</option>
                                            </select>
                                            @if ($errors->has('planificacion'))
                                                <label class="error">{{ $errors->first('planificacion') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Patologia Embarazo Actual</th>
                                        <th {{ $errors->has('embarazo_actual') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('embarazo_actual')) class="form-line error" @endif class="form-line">
                                                 <input type="text" name="embarazo_actual" class="form-control" required value="{{ old('embarazo_actual') }}"/>
                                            </div>
                                            @if ($errors->has('embarazo_actual'))
                                                <label class="error">{{ $errors->first('embarazo_actual') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Patologia Embarazo Anterior</th>
                                        <th {{ $errors->has('embarazo_anterior') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('embarazo_anterior')) class="form-line error" @endif class="form-line">
                                                <input type="text"  name="embarazo_anterior" class="form-control" required value="{{ old('embarazo_anterior') }}"/>
                                            </div>
                                            @if ($errors->has('embarazo_anterior'))
                                                <label class="error">{{ $errors->first('embarazo_anterior') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>OTROS</th>
                                        <th {{ $errors->has('otros') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('otros')) class="form-line error" @endif class="form-line">
                                                <input type="text"  name="otros" class="form-control" required value="{{ old('otros') }}"/>
                                            </div>
                                            @if ($errors->has('otros'))
                                                <label class="error">{{ $errors->first('otros') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>FAMILIARES</th>
                                        <th {{ $errors->has('familiares') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('familiares')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="familiares" class="form-control" required value="{{ old('familiares') }}"/>
                                            </div>
                                            @if ($errors->has('familiares'))
                                                <label class="error">{{ $errors->first('familiares') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2 class="card-inside-title">EXAMEN FISICO (HALLAZGO)</h2>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th {{ $errors->has('t.a') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('t.a')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="t.a" class="form-control" placeholder="T.A." required value="{{ old('t.a') }}"/>
                                            </div>
                                            @if ($errors->has('t.a'))
                                                <label class="error">{{ $errors->first('t.a') }}</label>
                                            @endif
                                        </th>
                                        <th {{ $errors->has('f.c') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('f.c')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="f.c" class="form-control"  placeholder="F.C." required value="{{ old('f.c') }}"/>
                                            </div>
                                            @if ($errors->has('f.c'))
                                                <label class="error">{{ $errors->first('f.c') }}</label>
                                            @endif
                                        </th>
                                        <th {{ $errors->has('f.r') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('f.r')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="f.r" class="form-control"  placeholder="F.R." required value="{{ old('f.r') }}"/>
                                            </div>
                                            @if ($errors->has('f.r'))
                                                <label class="error">{{ $errors->first('f.r') }}</label>
                                            @endif
                                        </th>
                                        <th {{ $errors->has('temp') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('temp')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="temp" class="form-control"  placeholder="TEMP." required value="{{ old('temp') }}"/>
                                            </div>
                                            @if ($errors->has('temp'))
                                                <label class="error">{{ $errors->first('temp') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th {{ $errors->has('peso') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('peso')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="peso" class="form-control"  placeholder="PESO:" required value="{{ old('peso') }}"/>
                                            </div>
                                            @if ($errors->has('peso'))
                                                <label class="error">{{ $errors->first('peso') }}</label>
                                            @endif
                                        </th>
                                        <th {{ $errors->has('glasglow') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('glasglow')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="glasglow" class="form-control"  placeholder="GLASGLOW" required value="{{ old('glasglow') }}"/>
                                            </div>
                                            @if ($errors->has('glasglow'))
                                                <label class="error">{{ $errors->first('glasglow') }}</label>
                                            @endif
                                        </th>
                                        <th {{ $errors->has('talla') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('talla')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="talla" class="form-control"  placeholder="TALLA." required value="{{ old('talla') }}"/>
                                            </div>
                                            @if ($errors->has('talla'))
                                                <label class="error">{{ $errors->first('talla') }}</label>
                                            @endif
                                        </th>
                                        <th {{ $errors->has('sato') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('sato')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="sato" class="form-control"  placeholder="SATO" required value="{{ old('sato') }}"/>
                                            </div>
                                            @if ($errors->has('sato'))
                                                <label class="error">{{ $errors->first('sato') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Conducta.</h2>
                                    <div class="form-group {{ $errors->has('conducta') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('conducta')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" name="conducta" class="form-control no-resize" required value="{{ old('conducta') }}"></textarea>
                                        </div>
                                        @if ($errors->has('conducta'))
                                            <label class="error">{{ $errors->first('conducta') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Evolucion.</h2>
                                    <div class="form-group {{ $errors->has('evolucion') ? ' has-error' : '' }}">
                                        <div  @if ($errors->has('evolucion')) class="form-line error" @endif class="form-line">
                                            <textarea rows="2" name="evolucion" class="form-control no-resize" required value="{{ old('evolucion') }}"></textarea>
                                        </div>
                                        @if ($errors->has('evolucion'))
                                             <label class="error">{{ $errors->first('evolucion') }}</label>
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
