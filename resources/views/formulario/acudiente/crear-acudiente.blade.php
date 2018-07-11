@extends('layouts.app')

@section('title')
FMV | Crear Acudiente
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
        DATOS ACUDIENTE
    </h1>
</div>
<!-- Basic Validation -->
<div class="row clearfix">	
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                {!! Form::open(['route' => 'acudiente.store', 'method' => 'POST']) !!}

                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}" >
                                <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                    <input type="text" class="form-control date" name="nombres"  placeholder="Nombres" required value="{{ old('nombres') }}"/>
                                </div>
                                @if ($errors->has('nombres'))
                                    <label class="error">{{ $errors->first('nombres') }}</label>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group {{ $errors->has('apellidos') ? ' has-error' : '' }}" >
                                <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                    <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos" required value="{{ old('apellidos') }}"/>
                                </div>
                                @if ($errors->has('apellidos'))
                                    <label class="error">{{ $errors->first('apellidos') }}</label>
                                @endif
                            </div>
                        </div>
                   </div>
                    <div class="input-group-lg">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <select class="form-control show-tick" name="tipo_documento" required >
                                    <option>-- Tipo De Documento --</option>
                                    <option value="">-- Tipo de documento --</option>
                                    <option name="CC" @if (old('tipo_documento'))=='CC' selected @endif>CC</option>
                                    <option name="TI" @if (old('tipo_documento'))=='TI' selected @endif>TI</option>
                                    <option name="CE" @if (old('tipo_documento'))=='CE' selected @endif>CE</option>
                                    <option name="RC" @if (old('tipo_documento'))=='RC' selected @endif>RC</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group {{ $errors->has('documento') ? ' has-error' : '' }}">
                                    <div @if ($errors->has('documento')) class="form-line error" @endif class="form-line">
                                        <input type="text" class="form-control date" name="documento" placeholder="Numero Identidad" required value="{{ old('documento') }}"/>
                                    </div>
                                    @if ($errors->has('documento'))
                                        <label class="error">{{ $errors->first('documento') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="input-group {{ $errors->has('dirrecion') ? ' has-error' : '' }}">
                                    <div @if ($errors->has('dirrecion')) class="form-line error" @endif class="form-line" >
                                        <input type="text" class="form-control date" name="dirrecion" placeholder="Dirrecion" required value="{{ old('dirrecion') }}">
                                    </div>
                                    @if ($errors->has('dirrecion'))
                                        <label class="error">{{ $errors->first('dirrecion') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="input-group {{ $errors->has('ciudad') ? ' has-error' : '' }}">
                                    <div @if ($errors->has('ciudad')) class="form-line error" @endif class="form-line" >
                                        <input type="text" class="form-control date" name="ciudad" placeholder="Ciudad" required value="{{ old('ciudad') }}">
                                    </div>
                                    @if ($errors->has('ciudad'))
                                        <label class="error">{{ $errors->first('ciudad') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group {{ $errors->has('telefono') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="material-icons">phone_iphone</i>
                                    </span>
                                    <div @if ($errors->has('telefono')) class="form-line error" @endif class="form-line" >
                                        <input type="text" class="form-control mobile-phone-number" placeholder="Telefono Celular" name="telefono" required value="{{ old('telefono') }}">
                                    </div>
                                    @if ($errors->has('telefono'))
                                        <label class="error">{{ $errors->first('telefono') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group {{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <span class="input-group-addon">
                                <i class="material-icons">phone_iphone</i>
                            </span>
                                    <div @if ($errors->has('telefono')) class="form-line error" @endif class="form-line" >
                                        <input type="text" class="form-control mobile-phone-number" placeholder="Telefono (Adicional)" name="telefono" required value="{{ old('telefono') }}">
                                    </div>
                                    @if ($errors->has('telefono'))
                                        <label class="error">{{ $errors->first('telefono') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="input-group {{ $errors->has('profesion') ? ' has-error' : '' }}">
                                    <div @if ($errors->has('profesion')) class="form-line error" @endif class="form-line" >
                                        <input type="text" class="form-control date" placeholder="Profesion" name="profesion" required value="{{ old('profesion') }}">
                                    </div>
                                    @if ($errors->has('profesion'))
                                        <label class="error">{{ $errors->first('profesion') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group {{ $errors->has('empresa_labora') ? ' has-error' : '' }}">
                                    <div @if ($errors->has('empresa_labora')) class="form-line error" @endif class="form-line" >
                                        <input type="text" class="form-control date" placeholder="Empresa" name="empresa_labora" required value="{{ old('empresa_labora') }}">
                                    </div>
                                    @if ($errors->has('empresa_labora'))
                                        <label class="error">{{ $errors->first('empresa_labora') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control show-tick" name="parentesco" required>
                                    <option>-- Parentesco Con Interno --</option>
                                    <option name="madre" @if (old('parentesco'))=='madre' selected @endif>Madre</option>
                                    <option name="padre" @if (old('parentesco'))=='padre' selected @endif>Padre</option>
                                    <option name="hijo(a)" @if (old('parentesco'))=='hijo(a)' selected @endif>Hijo(a)</option>
                                    <option name="tio(a)" @if (old('parentesco'))=='tio(a)' selected @endif>Tio(a)</option>
                                    <option name="primo(a)" @if (old('parentesco'))=='primo(a)' selected @endif>Primo(a)</option>
                                    <option name="amigo(a)" @if (old('parentesco'))=='amigo(a)' selected @endif>Amigo(a)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <select class="form-control show-tick" name="nombre" required>
                                    <option>-- Selecciona Eps-Sisben-Ars --</option>
                                    <option name=""  @if (old('nombre'))=='' selected @endif></option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group {{ $errors->has('aporte') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="material-icons">attach_money</i>
                                </span>
                                    <div @if ($errors->has('empresa_labora')) class="form-line error" @endif class="form-line" >
                                        <input type="text" class="form-control money-dollar" name="aporte" placeholder="Valor Aporte" required value="{{ old('aporte') }}">
                                    </div>
                                    @if ($errors->has('aporte'))
                                        <label class="error">{{ $errors->first('aporte') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <h3>NOTA EXCLUSIVA PARA EL ACUDIENTE O FAMILIAR:</h3>
                        <p align="justify">
                            Queremos informarle que en el momento en que el interno desee abandonar nuestra Institución, lo podrá hacer ya
                            que el programa es voluntario, pero antes trataremos de persuadirlo o concientizarlo del paso que va a tomar y de
                            la misma manera haremos lo posible para informarle a usted, para que sepa que desde ese momento no nos hacemos
                            responsables de nada de lo que pueda suceder con el interno.
                        </p>
                        <p>
                            NOTA. La colchoneta, las sabanas, las camisetas del uniforme y el dinero no
                            tienen devolución.
                        </p>
                    </div>
                    {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}
                    {!! Form::submit('Cancelar', ['class' =>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection