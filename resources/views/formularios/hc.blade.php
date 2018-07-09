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
                        Historia Clinica
                </h1>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{url("")}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div>
                                    <div class="input-group-lg">
                                        <div class="row clearfix">
                                            <br>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="numero" placeholder="No.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group">
                                                    <span align="right" class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div align="right" class="form-line">
                                                        <input align="right" type="date" class="form-control date" name="fecha" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">I.</h2>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="documento" placeholder="Datos de Identificacion">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                                <p>
                                                    <b>A.</b>
                                                </p>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="nombres" placeholder="Nombre de quien lo solicita">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="parentesco" required>
                                                    <option>-- Selecciona Parentesco con el Interno --</option>
                                                    <option name="madre">Madre</option>
                                                    <option name="padre">Padre</option>
                                                    <option name="hijo(a)">Hijo(a)</option>
                                                    <option name="tio(a)">Tio(a)</option>
                                                    <option name="primo(a)">Primo(a)</option>
                                                    <option name="amigo(a)">Amigo(a)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">II.</h2>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" name="sexo">
                                                    <option>-- Seleccione sexo --</option>
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
                                                <select class="form-control" name="estado_civil">
                                                    <option>-- Seleccione Estado Civil --</option>
                                                    <option name="soltero(a)">Soltero(a)</option>
                                                    <option name="casado(a)">Casado(a)</option>
                                                    <option name="viudo(a)">Viudo(a)</option>
                                                    <option name="union libre">union libre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                                <p>
                                                    <b>B.</b>
                                                </p>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="nombres" placeholder="Nombre del paciente">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
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
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="documento" placeholder="Numero Identidad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" name="sexo">
                                                    <option>-- Seleccion Sexo --</option>
                                                    <option name="femenino">Femenino</option>
                                                    <option name="masculino">Masculino</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="edad" placeholder="Edad">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="estado_civil" placeholder="Estado Civil">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div align="right" class="form-line">
                                                        <input align="right" type="date" class="form-control date" name="fecha_nacimiento" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="ciudad" placeholder="Lugar nacimiento">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="dirrecion" placeholder="Dirrecion de residencia">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="ciudad" placeholder="Ciudad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="telefono" placeholder="Telefono">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="telefono" placeholder="Celular">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="estudios" placeholder="Escolaridad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-1">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="nombre" required>
                                                    <option>-- Seleccione Eps, Sisben, Ars --</option>
                                                    <option name=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">III. Genograma</h2>
                                        <div class="row clearfix">
                                            <div class="col-md-10">
                                            </div>
                                        </div>
                                        <br>
                                        <h2 class="card-inside-title">IV.Descripcion del funcionamiento familiar.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize" name="funcionamiento_familiar" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">V.Motivo de la consulta.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize" name="motivo_consulta" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">VI.Diagnostico (DSM IV).</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize" name="diagnostico" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">VII.Definicion del problema.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize" name="definicion_problema" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">VIII.Sistema de Hipotesis.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize" name="hipotesis" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">IX.Intervencion:</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="5" class="form-control no-resize" name="objectivo_general" placeholder="A. Objectivo general"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="7" class="form-control no-resize" name="objectivo_especifico" placeholder="B. Objectivo especifico"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="6" class="form-control no-resize" name="tecnica" placeholder="A. Tecnicas"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="card-inside-title">X.Observaciones.</h2>
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea rows="14" class="form-control no-resize" name="observaciones" placeholder=""></textarea>
                                                        </div>
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
