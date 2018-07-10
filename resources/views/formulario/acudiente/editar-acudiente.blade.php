@extends('layouts.app')

@section('title')
FMV | Editar Acudiente
@endsection

@section('css')
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')

<div class="container-fluid">
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
                    {!! Form::open(['route' => ['acudiente.update',$acudiente], 'method' => 'PUT']) !!}

                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nombres"  value="{{$acudiente->nombres}}" placeholder="Nombres">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="apellidos" value="{{$acudiente->apellidos}}" placeholder="Apellidos">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-lg">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <select class="form-control" name="tipo_documento" required>
                                            <option>-- Seleccione Tipo De Documento --</option>
                                            <option name="CC" @if($acudiente->tipo_documento == 'CC') selected @endif>CC</option>
                                            <option name="TI" @if($acudiente->tipo_documento == 'TI') selected @endif>TI</option>
                                            <option name="CE" @if($acudiente->tipo_documento == 'CE') selected @endif>CE</option>
                                            <option name="RC" @if($acudiente->tipo_documento == 'RC') selected @endif>RC</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="documento" value="{{$acudiente->documento}}" placeholder="Numero Identidad">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="dirrecion" value="{{$acudiente->dirrecion}}" placeholder="Dirrecion">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control date" name="ciudad" value="{{$acudiente->ciudad}}" placeholder="Ciudad">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone_iphone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control mobile-phone-number" placeholder="Telefono Celular" value="{{$acudiente->telefono}}" name="telefono">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">phone_iphone</i>
                                    </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control mobile-phone-number" placeholder="Telefono (Adicional)" value="{{$acudiente->telefono}}" name="telefono">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Profesion" value="{{$acudiente->profesion}}" name="profesion">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Empresa" value="{{$acudiente->empresa_labora}}" name="empresa_labora">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="parentesco" required>
                                            <option>-- Selecciona Parentesco Con Interno --</option>
                                            <option name="Madre" @if($acudiente->parentesco == 'Madre') selected @endif>Madre</option>
                                            <option name="Padre" @if($acudiente->parentesco == 'Padre') selected @endif>Padre</option>
                                            <option name="Hijo(a)" @if($acudiente->parentesco == 'Hijo(a)') selected @endif>Hijo(a)</option>
                                            <option name="Tio(a)" @if($acudiente->parentesco == 'Tio(a)') selected @endif>Tio(a)</option>
                                            <option name="Primo(a)" @if($acudiente->parentesco == 'Primo(a)') selected @endif>Primo(a)</option>
                                            <option name="Amigo(a)" @if($acudiente->parentesco == 'Amigo(a)') selected @endif>Amigo(a)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <select class="form-control" name="nombre" required>
                                            <option>-- Selecciona Eps-Sisben-Ars --</option>
                                            <option name=""></option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control money-dollar" name="aporte" value="{{$acudiente->aporte}}" placeholder="Valor Aporte">
                                            </div>
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
                        {!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
