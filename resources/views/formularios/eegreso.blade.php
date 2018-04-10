@extends('dashboard')

@section('topbar')
    @include('admin.topbar')
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    EPICRISIS DE EGRESO
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
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>
                                                        <input align="right" type="date" name="fecha" class="form-control date" placeholder="dd/mm/aaaa">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>Hora</th>
                                                    <th>
                                                        <input align="right" type="time" name="hora" class="form-control date" placeholder="hh/mm">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Nombres</th>
                                                    <th>
                                                        <input type="text" name="nombres" class="form-control" name="names" required>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Apellidos</th>
                                                    <th>
                                                        <input type="text" name="apellidos" class="form-control" name="names" required>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Sexo</th>
                                                    <th>
                                                        <select class="form-control" name="sexo">
                                                            <option>-- Seleccion Sexo --</option>
                                                            <option name="femenino">Femenino</option>
                                                            <option name="masculino">Masculino</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Edad</th>
                                                    <th>
                                                        <input type="text" name="edad" class="form-control date">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Linea de Pago</th>
                                                    <th>
                                                        <select class="form-control" name="forma_pago">
                                                            <option>-- Seleccione --</option>
                                                            <option name="efectivo">Efectivo</option>
                                                            <option name="banco">Consignacion Bancaria</option>
                                                            <option name="cheque">Cheque</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Servicio</th>
                                                    <th>
                                                        <input type="text" name="servicio" class="form-control date">
                                                    </th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 class="card-inside-title">EGRESO</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Condicion del Paciente a la Salida</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Incapacidad</td>
                                                        <td>
                                                            <select class="form-control" name="incapacidad">
                                                                <option>seleccion</option>
                                                                <option name="si">si</option>
                                                                <option name="no">No</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estado de Salud</td>
                                                        <td>
                                                            <select class="form-control" name="estado_salud">
                                                                <option>seleccion</option>
                                                                <option name="vivo">vivo</option>
                                                                <option name="muerto">muerto</option>
                                                                <option name="remitido">remitido</option>
                                                                <option name="egreso voluntario">egreso voluntario</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Plan Manejo Ambulatorio (Recomendado).</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="plan_mejora_ambulatorio" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Medicamentos.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="medicamentos" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
