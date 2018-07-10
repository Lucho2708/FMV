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
                    <a href="" class="showHide"></a>
                    <div class="body">
                        <div class="toggle-vis" data-column="0">
                            <input  class="toggle-vis" data-column="0" type="checkbox" id="basic_checkbox_1" name="Nombres" checked="checked" />
                            <label class="toggle-vis" data-column="0" for="basic_checkbox_1" >Nombres</label>
                        </div>
                        <a class="toggle-vis" data-column="0">Nombres</a>
                        <div class="table-responsive">
                            <table id="MyTable" class="table table-bordered table-striped table-hover dataTable">
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
                                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                                <script>$("input:checkbox:not(:checked)").each(function() {
                                    var column = "table ." + $(this).attr("name");
                                        $(column).hide();
                                    });
                                    $("input:checkbox").click(function(){
                                        var column = "table ." + $(this).attr("name");
                                    $(column).toggle();
                                    });
                                    //# sourceURL=pen.js
                                </script>
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
            } );
         
            $('a.toggle-vis').on( 'click', function (e) {
                e.preventDefault();
         
                // Get the column API object
                var column = table.column( $(this).attr('data-column') );
         
                // Toggle the visibility
                column.visible( ! column.visible() );
            } );
        } );
    </script>
@endsection