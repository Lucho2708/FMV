@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 2,$menun2=3))
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
                            VER ACUDIENTE
                        </h2>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                           <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Parentesco</th>
                                    <th>T.D.</th>
                                    <th>Documento</th>
                                    <th>Direccion</th>
                                    <th>Telefono 1</th>
                                    <th>Profeción</th>
                                    <th>Empresa</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Parentesco</th>
                                    <th>T.D.</th>
                                    <th>Documento</th>
                                    <th>Direccion</th>
                                    <th>Telefono 1</th>
                                    <th>Profeción</th>
                                    <th>Empresa</th>
                                    <th>Accion</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($acudiente as $acudiente)
                                    <tr>
                                        <td>{{$acudiente->nombres}}</td>
                                        <td>{{$acudiente->apellidos}}</td>
                                        <td>{{$acudiente->parentesco}}</td>
                                        <td>{{$acudiente->tipo_documento}}</td>
                                        <td>{{$acudiente->documento}}</td>
                                        <td>{{$acudiente->dirrecion}}</td>
                                        <td>{{$acudiente->telefono}}</td>
                                        <td>{{$acudiente->profesion}}</td>
                                        <td>{{$acudiente->empresa_labora}}</td>
                                        <td>
                                            <a class="btn-circle" href="{{route('acudiente.edit',$acudiente->id)}}" role="button"><i class="material-icons">create</i></a>
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