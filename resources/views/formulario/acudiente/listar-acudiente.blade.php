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