@extends('layouts.app')

@section('title')
FMV | Perfil
@endsection

@section('css')
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
    <style>
        #estilo-foto{
            width: 150px;
            padding: 20px;
            margin: 50px;
            position: relative;
            font-size: 30px;
        }

        #files{
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 0;
        }
    </style>
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')

<div class="block-header">
    <h1>
        Actualizar perfil
    </h1>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <br>
            <div class="body">

                
                <form enctype="multipart/form-data" action="/perfil" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    
                    
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                
                                <img src="/images/{{ $user->avatar}}" style="width: 150px; height: 150px; float:left; border-radius: 50%; margin-right:25px ">
                                <div class="form">
                                    <h3>{{ $user->nombres }} {{ $user->apellidos }}</h3>
                                </div>
                                <div  id="estilo-foto" class="glyphicon glyphicon-picture">
                                    <div class="form">
                                         <input type="file" name="avatar" id="files">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label>Nombres</label>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nombres" value="{{$user->nombres}}" placeholder="Nombres" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Apellidos</label>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="apellidos" value="{{$user->apellidos}}" placeholder="Apellidos" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label>Tipo de Documento</label>
                            <div class="input-group">
                                <select class="form-control" name="tipo_documento" required>
                                    <option>-- Seleccione --</option>
                                    <option name="CC" @if($user->tipo_documento == 'CC') selected @endif>CC</option>
                                    <option name="TI" @if($user->tipo_documento == 'TI') selected @endif>TI</option>
                                    <option name="CE" @if($user->tipo_documento == 'CE') selected @endif>CE</option>
                                    <option name="RC" @if($user->tipo_documento == 'RC') selected @endif>RC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Documento</label>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="documento" value="{{$user->documento}}" placeholder="Documento" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label>Direccion</label>
                            <div class="input-group">
                                <div class="form-line">
                                    <textarea name="direccion"  cols="1" rows="2" class="form-control no-resize" placeholder="Dirección" required>{{$user->direccion}}</textarea>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Telefono</label>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="tel" class="form-control" name="telefono" value="{{$user->telefono}}" placeholder="Telefono" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label>Correo Electronico</label>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Usuario</label>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="usuario" class="form-control" name="usuario" value="{{$user->usuario}}" placeholder="Usuario" required>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <input type="submit" class="btn btn-primary" >
                </form>
            </div>
        </div>
    </div>
</div>

@endsection