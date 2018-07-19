@extends('layouts.app')

@section('title')
    FMV | Epicrisis de Ingreso
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
        EPICRISIS DE INGRESO
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
                                            <input align="right" type="date" class="form-control date" name="fecha" placeholder="dd/mm/aaaa">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Hora</th>
                                        <th>
                                            <input align="right" type="time"  class="form-control date" name="hora" placeholder="hh/mm">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>
                                            <input type="text" class="form-control" name="nombres" required>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Apellidos</th>
                                        <th>
                                            <input type="text" class="form-control" name="apellidos" required>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Edad</th>
                                        <th>
                                            <input type="text" name="edad" class="form-control date">
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
                                        <th>Servicio</th>
                                        <th>
                                            <input type="text" name="servicio" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Linea de Pago</th>
                                        <th>
                                            <select class="form-control" name="forma_pago">
                                                <option>-- seleccione --</option>
                                                <option name="efectivo">Efectivo</option>
                                                <option name="banco">Consignacion Bancaria</option>
                                                <option name="cheque">Cheque</option>
                                            </select>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Documento</th>
                                        <th>
                                            <input type="text" name="documento" class="form-control date">
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Motivo de Consulta o Solicitud de Servicio</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2"  name="motivo_consulta" class="form-control no-resize"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Emfermedad Actual</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2" name="emfermedad_actual" class="form-control no-resize"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Antecedentes</h2>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Patologicos</th>
                                        <th>
                                            <input type="text" name="patologicos" class="form-control date">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Quirurjicos</th>
                                        <th>
                                            <input type="text" name="quirurjicos" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Toxico Alergicos</th>
                                        <th>
                                            <input type="text"  name="toxico_alergicos" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Farmacologicos</th>
                                        <th>
                                            <input type="text" name="farmacologicos" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Inmunisacion</th>
                                        <th>
                                            <input type="text" name="inmunisacion" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Transfusion</th>
                                        <th>
                                            <input type="text" name="transfusion" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Ginecobstetricios</th>
                                        <th>
                                            <textarea rows="2" name="ginecobstetricios" class="form-control no-resize"></textarea>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Menarquias</th>
                                        <th>
                                            <input type="text" name="menarquias" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Ciclos</th>
                                        <th>
                                            <input type="text" name="ciclos" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Regular</th>
                                        <th>
                                            <select class="form-control" name="regular">
                                                <option>seleccion</option>
                                                <option name="si">SI</option>
                                                <option name="no">NO</option>
                                            </select>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Planificacion ETS</th>
                                        <th>
                                            <select class="form-control" name="planificacion">
                                                <option>seleccion</option>
                                                <option name="g">G</option>
                                                <option name="p">P</option>
                                                <option name="c">C</option>
                                                <option name="a">A</option>
                                                <option name="v">V</option>
                                                <option name="o">O</option>
                                                <option name="e">E</option>
                                                <option name="mola">MOLA</option>
                                            </select>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Patologia Embarazo Actual</th>
                                        <th>
                                            <input type="text" name="embarazo_actual" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Patologia Embarazo Anterior</th>
                                        <th>
                                            <input type="text"  name="embarazo_anterior" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>OTROS</th>
                                        <th>
                                            <input type="text"  name="otros" class="form-control date">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>FAMILIARES</th>
                                        <th>
                                            <input type="text" name="familiares" class="form-control date">
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2 class="card-inside-title">EXAMEN FISICO (HALLAZGO)</h2>
                            <div class="body table-responsive">
                                <table  class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="text" name="t.a" class="form-control date" placeholder="T.A." >
                                        </th>
                                        <th>
                                            <input type="text" name="f.c" class="form-control date"  placeholder="F.C." >
                                        </th>
                                        <th>
                                            <input type="text" name="f.r" class="form-control date"  placeholder="F.R." >
                                        </th>
                                        <th>
                                            <input type="text" name="temp" class="form-control date"  placeholder="TEMP." >
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <input type="text" name="peso" class="form-control date"  placeholder="PESO:" >
                                        </th>
                                        <th>
                                            <input type="text" name="glasglow" class="form-control date"  placeholder="GLASGLOW" >
                                        </th>
                                        <th>
                                            <input type="text" name="talla" class="form-control date"  placeholder="TALLA." >
                                        </th>
                                        <th>
                                            <input type="text" name="sato" class="form-control date"  placeholder="SATO">
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Conducta.</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2" name="conducta" class="form-control no-resize" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Evolucion.</h2>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="2" name="evolucion" class="form-control no-resize" placeholder=""></textarea>
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
