
@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 =1,$menun2=1))
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')
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
                        @if(Session::has('message'))
                            <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{Session::get('message')}}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>T.D.</th>
                                    <th>Documento</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Usuario</th>
                                    <th>Perfil</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>T.D.</th>
                                    <th>Documento</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Usuario</th>
                                    <th>Perfil</th>
                                    <th>Accion</th>

                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($usuario as $usuario)
                                    <tr>
                                        <td>{{$usuario->nombres}}</td>
                                        <td>{{$usuario->apellidos}}</td>
                                        <td>{{$usuario->tipo_documento}}</td>
                                        <td>{{$usuario->documento}}</td>
                                        <td>{{$usuario->dirrecion}}</td>
                                        <td>{{$usuario->telefono}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>{{$usuario->usuario}}</td>
                                        <td>{{$usuario->perfil}}</td>
                                        <td>
                                            <a class="btn-circle" href="{{route('usuario.edit',$usuario->id)}}" role="button"><i class="material-icons">create</i></a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->


    </div>
@endsection