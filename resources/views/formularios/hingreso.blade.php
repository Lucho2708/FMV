@extends('layouts.app')

@section('title')
    FMV | Hoja de Ingreso
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
        HOJA DE INGRESO
    </h1>
</div>
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form id="form_validation" method="POST" action="{{url("")}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div id="form_validation">
                        <div class="input-group-lg">
                            <br>
                            <br>
                            <h2 class="card-inside-title">DATOS DEL PACIENTE</h2>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>FECHA DE CONSULTA</th>
                                        <th>
                                            <input align="right" type="date" class="form-control date" name="fecha_consulta" placeholder="dd/mm/aaaa">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>NOMBRES</th>
                                        <th>
                                            <input type="text" name="nombres" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>APELLIDOS</th>
                                        <th>
                                            <input type="text" name="apellidos" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>IDENTIFICACION</th>
                                        <th>
                                            <input type="text" name="documento" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>FECHA DE NACIMIENTO</th>
                                        <th>
                                            <input align="right" type="date" name="fecha_nacimiento" class="form-control date" placeholder="dd/mm/aaaa">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>EDAD</th>
                                        <th>
                                            <input type="text" class="form-control date" name="edad">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>EMPRESA PRESTADORA DE SALUD</th>
                                        <th>
                                            <input type="text" class="form-control date" name="nombre">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>DIRECCION</th>
                                        <th>
                                            <input type="text" class="form-control date" name="dirrecion">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>TELEFONO</th>
                                        <th>
                                            <input type="text" class="form-control date" name="telefono">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>SEXO</th>
                                        <th>
                                            <select class="form-control" name="sexo">
                                                <option>-- Seleccion Sexo --</option>
                                                <option name="femenino">Femenino</option>
                                                <option name="masculino">Masculino</option>
                                            </select>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>CIUDAD</th>
                                        <th>
                                            <input type="text"  name="ciudad" class="form-control date">
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <h2 class="card-inside-title">DATOS DEL ACUDIENTE</h2>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>NOMBRES</th>
                                        <th>
                                            <input type="text" name="nombres" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>APELLIDOS</th>
                                        <th>
                                            <input type="text" name="apellidos" class="form-control date">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>DIRECCION</th>
                                        <th>
                                            <input type="text" name="dirrecion" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>TELEFONO</th>
                                        <th>
                                            <input type="text" name="telefono" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>PARENTESCO</th>
                                        <th>
                                            <select class="form-control" name="parentesco">
                                                <option>-- Seleccion Parentesco Con Paciente --</option>
                                                <option name="madre">Madre</option>
                                                <option name="padre">Padre</option>
                                                <option name="hermano(a)">Hermano(a)</option>
                                                <option name="tio(a)">Tio(a)</option>
                                                <option name="abuelo(a)">Abuelo(a)</option>
                                                <option name="amigo(a)">Amigo(a)</option>
                                            </select>
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Datos de Ingreso</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3" class="form-control no-resize" name="motivo_consulta" placeholder="Motivo de Consulta"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="card-inside-title">Observaciones</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="3"  class="form-control no-resize" name="observaciones"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                            <button class="btn btn-danger waves-effect" type="submit">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
