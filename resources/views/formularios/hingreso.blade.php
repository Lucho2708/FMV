@extends('layouts.app')

@section('title')
    FMV | Hoja de Ingreso
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
        HOJA DE INGRESO
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
                            <br>
                            <h2 class="card-inside-title">DATOS DEL PACIENTE</h2>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Fecha Consulta</th>
                                        <th {{ $errors->has('fecha_consulta') ? ' has-error' : '' }} >
                                            <div  @if ($errors->has('fecha_consulta')) class="form-line error" @endif class="form-line">
                                                <input align="right" type="text" class="datepicker form-control" name="fecha_consulta" required value="{{ old('fecha_consulta') }}" />
                                            </div>
                                            @if ($errors->has('fecha_consulta'))
                                                <label class="error">{{ $errors->first('fecha_consulta') }}</label>
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
                                                <label class="error">{{ $errors->first('fecha') }}</label>
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
                                        <th>Fecha De Nacimiento</th>
                                        <th {{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('fecha_nacimiento')) class="form-line error" @endif class="form-line">
                                                 <input align="right" type="text" name="fecha_nacimiento" class="datepicker form-control" required value="{{ old('fecha_nacimiento') }}" />
                                            </div>
                                            @if ($errors->has('fecha_nacimiento'))
                                                <label class="error">{{ $errors->first('fecha_nacimiento') }}</label>
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
                                        <th>Empresa Prestadora Salud</th>
                                        <th {{ $errors->has('nombre') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('nombre')) class="form-line error" @endif class="form-line">
                                                 <input type="text" class="form-control date" name="nombre" required value="{{ old('nombre') }}"/>
                                            </div>
                                            @if ($errors->has('nombre'))
                                                <label class="error">{{ $errors->first('nombre') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Direccion</th>
                                        <th {{ $errors->has('dirrecion') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('dirrecion')) class="form-line error" @endif class="form-line">
                                                 <input type="text" class="form-control" name="dirrecion" required value="{{ old('dirrecion') }}"/>
                                            </div>
                                            @if ($errors->has('dirrecion'))
                                                <label class="error">{{ $errors->first('dirrecion') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Telefono</th>
                                        <th {{ $errors->has('telefono') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('telefono')) class="form-line error" @endif class="form-line">
                                                <input type="text" class="form-control date" name="telefono" required value="{{ old('telefono') }}"/>
                                            </div>
                                            @if ($errors->has('telefono'))
                                                <label class="error">{{ $errors->first('telefono') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Sexo</th>
                                        <select class="form-control" name="genero">
                                            <option>-- Seleccione Sexo --</option>
                                            <option name="Masculino" @if (old('genero'))=='Masculino' selected @endif>Masculino</option>
                                            <option name="Femenino" @if (old('genero'))=='Femenino' selected @endif>Femenino</option>
                                        </select>
                                        @if ($errors->has('genero'))
                                            <label class="error">{{ $errors->first('genero') }}</label>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th>Ciudad</th>
                                        <th {{ $errors->has('nombre') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('nombre')) class="form-line error" @endif class="form-line">
                                                 <input type="text"  name="nombre" class="form-control" required value="{{ old('nombre') }}"/>
                                            </div>
                                            @if ($errors->has('nombre'))
                                                <label class="error">{{ $errors->first('nombre') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <h2 class="card-inside-title">DATOS DEL ACUDIENTE</h2>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th {{ $errors->has('nombres') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                                <input type="text" name="nombres" class="form-control" name="names" required value="{{ old('nombres') }}"/>
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
                                                <input type="text" name="apellidos" class="form-control" name="names" required value="{{ old('apellidos') }}"/>
                                            </div>
                                            @if ($errors->has('apellidos'))
                                                <label class="error">{{ $errors->first('apellidos') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Direccion</th>
                                        <th {{ $errors->has('dirrecion') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('dirrecion')) class="form-line error" @endif class="form-line">
                                                <input type="text" class="form-control" name="dirrecion" required value="{{ old('dirrecion') }}"/>
                                            </div>
                                            @if ($errors->has('dirrecion'))
                                                <label class="error">{{ $errors->first('dirrecion') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Telefono</th>
                                        <th {{ $errors->has('telefono') ? ' has-error' : '' }}>
                                            <div  @if ($errors->has('telefono')) class="form-line error" @endif class="form-line">
                                                <input type="text" class="form-control date" name="telefono" required value="{{ old('telefono') }}"/>
                                            </div>
                                            @if ($errors->has('telefono'))
                                                <label class="error">{{ $errors->first('telefono') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Parentesco</th>
                                        <th>
                                            <select class="form-control show-tick" name="parentesco" required>
                                                <option>-- Parentesco Con Interno --</option>
                                                <option name="madre" @if (old('parentesco'))=='madre' selected @endif>Madre</option>
                                                <option name="padre" @if (old('parentesco'))=='padre' selected @endif>Padre</option>
                                                <option name="hijo(a)" @if (old('parentesco'))=='hijo(a)' selected @endif>Hijo(a)</option>
                                                <option name="tio(a)" @if (old('parentesco'))=='tio(a)' selected @endif>Tio(a)</option>
                                                <option name="primo(a)" @if (old('parentesco'))=='primo(a)' selected @endif>Primo(a)</option>
                                                <option name="amigo(a)" @if (old('parentesco'))=='amigo(a)' selected @endif>Amigo(a)</option>
                                            </select>
                                            @if ($errors->has('parentesco'))
                                                <label class="error">{{ $errors->first('parentesco') }}</label>
                                            @endif
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Datos de Ingreso</h2>
                                    <div class="form-group {{ $errors->has('motivo_consulta') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('motivo_consulta')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="motivo_consulta" placeholder="Motivo de Consulta" required value="{{ old('motivo_consulta') }}"></textarea>
                                        </div>
                                        @if ($errors->has('motivo_consulta'))
                                            <label class="error">{{ $errors->first('motivo_consulta') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Observaciones</h2>
                                    <div class="form-group {{ $errors->has('observaciones') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('observaciones')) class="form-line error" @endif class="form-line">
                                            <textarea rows="3"  class="form-control no-resize" name="observaciones" required value="{{ old('observaciones') }}"></textarea>
                                        </div>
                                        @if ($errors->has('observaciones'))
                                            <label class="error">{{ $errors->first('observaciones') }}</label>
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
