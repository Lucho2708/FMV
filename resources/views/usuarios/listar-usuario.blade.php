@extends('layouts.app')

@section('title')
FMV | Ver Usuarios
@endsection

@section('css')
    <!-- Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
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


                        <div >
                            
                        </div>
                        <div >
                            
                        </div>
                        <button class="btn bg-cyan waves-effect m-b-15" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                <i class="material-icons">settings</i>
                            </button>
                            <div class="collapse" id="collapseExample">
                                <div class="well">
                                    <div class="demo-checkbox" >
                                        <input type="checkbox" checked id="Nombres" data-column="0" class="toggle-vis" disabled />
                                        <label for="Nombres" >Nombres</label>

                                        <input type="checkbox" checked id="Apellidos" data-column="1" class="toggle-vis"/>
                                        <label for="Apellidos" >Apellidos</label>

                                        <input type="checkbox" checked id="T.D." data-column="2" class="toggle-vis"/>
                                        <label for="T.D." >T.D.</label>

                                        <input type="checkbox" checked id="Documento" data-column="3" class="toggle-vis"/>
                                        <label for="Documento" >Documento</label>

                                        <input type="checkbox" checked id="Direccion" data-column="4" class="toggle-vis"/>
                                        <label for="Direccion" >Direccion</label>

                                        <input type="checkbox" checked id="Telefono" data-column="5" class="toggle-vis"/>
                                        <label for="Telefono" >Telefono</label>

                                        <input type="checkbox" checked id="Correo" data-column="6" class="toggle-vis"/>
                                        <label for="Correo" >Correo</label>

                                        <input type="checkbox" checked id="Usuario" data-column="7" class="toggle-vis"/>
                                        <label for="Usuario" >Usuario</label>

                                        <input type="checkbox" checked id="Perfil" data-column="8" class="toggle-vis"/>
                                        <label for="Perfil" >Perfil</label>

                                        <input type="checkbox" checked id="Accion" data-column="9" class="toggle-vis"/>
                                        <label for="Accion" >Accion</label>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="table-responsive">
                            <table id="MyTable" class="table table-bordered table-striped table-hover dataTable display">
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
                                <tbody>
                                @foreach($usuario as $usuario)
                                    <tr>
                                        <td>{{$usuario->nombres}}</td>
                                        <td>{{$usuario->apellidos}}</td>
                                        <td>{{$usuario->tipo_documento}}</td>
                                        <td>{{$usuario->documento}}</td>
                                        <td>{{$usuario->direccion}}</td>
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

@section('js')
<!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            var table = $('#MyTable').DataTable( {
                autoFill: true

            } );
         
            $('input.toggle-vis').on( 'click', function (e) {
                
                // Get the column API object
                var column = table.column( $(this).attr('data-column') );
         
                // Toggle the visibility
                column.visible( ! column.visible() );
            } );
            
        } );
    </script>
@endsection