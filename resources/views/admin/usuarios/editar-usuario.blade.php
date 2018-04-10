@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 0,$menun2=0))
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')
    <!-- Advanced Form Example With Validation -->
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            VER USUARIOS
                        </h2>
                    </div>
                    <div class="body">
                        {!! Form::open(['route' => ['usuario.update',$usuario], 'method' => 'PUT']) !!}

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nombres" value="{{$usuario->nombres}}" placeholder="Nombres" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="apellidos" value="{{$usuario->apellidos}}" placeholder="Apellidos" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="form-control" name="tipo_documento" required>
                                            <option>-- Seleccione tipo de documento --</option>
                                            <option name="CC" @if($usuario->tipo_documento == 'CC') selected @endif>CC</option>
                                            <option name="TI" @if($usuario->tipo_documento == 'TI') selected @endif>TI</option>
                                            <option name="CE" @if($usuario->tipo_documento == 'CE') selected @endif>CE</option>
                                            <option name="RC" @if($usuario->tipo_documento == 'RC') selected @endif>RC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="documento" value="{{$usuario->documento}}" placeholder="Documento" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <textarea name="dirrecion"  cols="1" rows="2" class="form-control no-resize" placeholder="Dirección" required>{{$usuario->dirrecion}}</textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="tel" class="form-control" name="telefono" value="{{$usuario->telefono}}" placeholder="Telefono" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" value="{{$usuario->email}}" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="usuario" class="form-control" name="usuario" value="{{$usuario->usuario}}" placeholder="Usuario" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="contrasena" value="{{$usuario->contrasena}}" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="form-control" name="perfil" required>
                                            <option>-- Seleccione perfil --</option>
                                            <option name="admin" @if ($usuario->perfil =='Administrador') selected  @endif>Administrador</option>
                                            <option name="psico" @if ($usuario->perfil =='Psicologo' ) selected  @endif>Psicologo</option>
                                            <option name="tbs" @if ($usuario->perfil =='Trabajador Social') selected @endif>Trabajador Social</option>
                                            <option name="emple" @if ($usuario->perfil =='Empleado') selected @endif>Empleado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('Actualizar', ['class' =>'btn btn-primary']) !!}


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection