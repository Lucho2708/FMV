@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 1,$menun2=2))
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
                        CREAR USUARIOS
                    </h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="{{ route('register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nombres" placeholder="Nombres" required>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control" name="tipo_documento" required>
                                        <option>-- Seleccione tipo de documento --</option>
                                        <option name="CC">CC</option>
                                        <option name="TI">TI</option>
                                        <option name="CE">CE</option>
                                        <option name="RC">RC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="documento"  placeholder="Documento" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <textarea name="dirrecion" cols="1" rows="1" class="form-control no-resize" placeholder="Dirección" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="tel" class="form-control" name="telefono" placeholder="Telefono" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="usuario" class="form-control" name="usuario" placeholder="Usuario" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control" name="perfil" required>
                                        <option>-- Seleccione perfil --</option>
                                        <option name="admin">Administrador</option>
                                        <option name="psico">Psicologo</option>
                                        <option name="tbs">Trabajador Social</option>
                                        <option name="emple">Empleado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary waves-effect" type="submit">CREAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection