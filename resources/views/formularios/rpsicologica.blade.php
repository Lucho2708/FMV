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
                    REMISION PSICOLOGICA
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
                                        <div class="row clearfix">
                                            <br>
                                            <div class="col-md-2">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="date" class="form-control date" name="fecha" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">1. Datos Personales del Remitido</h2>
                                        <div class="row clearfix">
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="nombres"  placeholder="Nombres">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <select class="form-control" name="sexo">
                                                    <option>-- Seleccion Sexo --</option>
                                                    <option name="femenino">Femenino</option>
                                                    <option name="masculino">Masculino</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="edad" placeholder="Edad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                     <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="date" class="form-control date" name="fecha" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="ciudad" placeholder="Ciudad o lugar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="tipo_documento" required>
                                                    <option>-- Seleccione tipo de documento --</option>
                                                    <option name="CC">CC</option>
                                                    <option name="TI">TI</option>
                                                    <option name="CE">CE</option>
                                                    <option name="RC">RC</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="documento" placeholder="Numero de Cedula">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>seleccione Escolaridad</option>
                                                    <option name="primaria">Primaria</option>
                                                    <option name="secundaria">Secundaria</option>
                                                    <option name="universidad">Universidad</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="estado_civil" placeholder="Estado Civil">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="dirrecion" placeholder="Dirrecion">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="telefono" placeholder="Telefono">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Remite Paciente a:</h2>
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <select class="form-control" name="remite">
                                                    <option>-seleccione-</option>
                                                    <option name="medico_general">Medico General</option>
                                                    <option name="psiquiatria">Psiquiatria</option>
                                                    <option name="eps">Eps</option>
                                                    <option name="sisben">Sisben</option>
                                                    <option name="otros">Otros</option>
                                                    <option name="observacion">Observacion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">2. Descripcion</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="despcripcion"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">3. Motivo de la Remision</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="motivo_remision"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">4. Recomendaciones</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="recomendaciones"></textarea>
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
