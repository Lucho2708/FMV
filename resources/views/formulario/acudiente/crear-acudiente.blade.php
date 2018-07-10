@extends('layouts.app')

@section('title')
FMV | Ver Paciente
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
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control date" name="nombres"  placeholder="Nombres">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group-lg">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <select class="form-control" name="tipo_documento" required>
                                        <option>-- Seleccione Tipo De Documento --</option>
                                        <option name="CC">CC</option>
                                        <option name="TI">TI</option>
                                        <option name="CE">CE</option>
                                        <option name="RC">RC</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="documento" placeholder="Numero Identidad">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="dirrecion" placeholder="Dirrecion">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="ciudad" placeholder="Ciudad">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone_iphone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control mobile-phone-number" placeholder="Telefono Celular" name="telefono">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">phone_iphone</i>
                                </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control mobile-phone-number" placeholder="Telefono (Adicional)" name="telefono">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Profesion" name="profesion">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Empresa" name="empresa_labora">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="parentesco" required>
                                        <option>-- Selecciona Parentesco Con Interno --</option>
                                        <option name="madre">Madre</option>
                                        <option name="padre">Padre</option>
                                        <option name="hijo(a)">Hijo(a)</option>
                                        <option name="tio(a)">Tio(a)</option>
                                        <option name="primo(a)">Primo(a)</option>
                                        <option name="amigo(a)">Amigo(a)</option>
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
                                            <input type="text" class="form-control money-dollar" name="aporte" placeholder="Valor Aporte">
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
                    {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}


                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection