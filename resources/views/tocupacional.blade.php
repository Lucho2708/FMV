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
                    FORMATO DE EVALUACION
                    TERAPIA OCUPACIONAL
                </h1>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Datos Personales</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{url("")}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div id="form_validation">
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
                                    <div class="input-group-lg">
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <b>Fecha de Nacimiento</b>
                                                <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                    <div class="form-line">
                                                        <input type="date" class="form-control date" name="fecha" placeholder="dd/mm/aaaa">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="edad" placeholder="Edad">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <p>
                                                    <b>Estado Civil</b>
                                                </p>
                                                <select class="form-control" name="estado_civil">
                                                    <option>Seleccione</option>
                                                    <option name="soltero(a)">Soltero(a)</option>
                                                    <option name="casado(a)">Casado(a)</option>
                                                    <option name="viudo(a)">Viudo(a)</option>
                                                    <option name="union libre">Union libre</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <b>Escolaridad</b>
                                                </p>
                                                <select class="form-control" name="escolaridad">
                                                    <option>Seleccione</option>
                                                    <option name="primaria">Primaria</option>
                                                    <option name="segundaria">Segundaria</option>
                                                    <option name="universidad">Universidad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="emfermedad_actual" placeholder="Emfermedad Actual">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control date" name="natural" placeholder="Natural">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES INTEGRALES DE MOVIMIENTO</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Patrones</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Alcance plano superior</td>
                                                        <td>
                                                            <select class="form-control" name="alcance_plano_superior">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alcance plano inferior</td>
                                                        <td>
                                                            <select class="form-control" name="alcance_plano_inferior">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agarre a mano llena</td>
                                                        <td>
                                                            <select class="form-control" name="agarre_mano_llena">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agarre cilíndrico</td>
                                                        <td>
                                                            <select class="form-control" name="agarre_cilindrico">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Enganche</td>
                                                        <td>
                                                            <select class="form-control" name="enganche">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saltar involuntario</td>
                                                        <td>
                                                            <select class="form-control" name="saltar_involuntario">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saltar voluntario</td>
                                                        <td>
                                                            <select class="form-control" name="saltar_voluntario">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lanzar con proporción</td>
                                                        <td>
                                                            <select class="form-control" name="lanzar_proporcion">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lanzar con rudimentaria</td>
                                                        <td>
                                                            <select class="form-control" name="lanzar_rudimentaria">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="observaciones" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES FUNCIONALES DE MOVIMIENTO</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Patrones</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Mano-Cabeza</td>
                                                        <td>
                                                            <select class="form-control" name="mano_cabeza">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-boca</td>
                                                        <td>
                                                            <select class="form-control" name="mano_boca">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-Hombro</td>
                                                        <td>
                                                            <select class="form-control" name="mano_hombro">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-espalda</td>
                                                        <td>
                                                            <select class="form-control" name="mano_espalda">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Mano-pierna</td>
                                                        <td>
                                                            <select class="form-control" name="mano_pierna">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-pie</td>
                                                        <td>
                                                            <select class="form-control" name="mano_pie">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-cola</td>
                                                        <td>
                                                            <select class="form-control" name="mano_cola">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mano-bilateral</td>
                                                        <td>
                                                            <select class="form-control" name="mano_bilateral">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="observaciones" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES COGNITIVOS</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Area Cognitiva</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Observación</td>
                                                        <td>
                                                            <select class="form-control" name="observacion">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nivel de Atención</td>
                                                        <td>
                                                            <select class="form-control" name="nivel_atencion">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Concentración</td>
                                                        <td>
                                                            <select class="form-control" name="concentracion">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Habilidad solucionar </td>
                                                        <td>
                                                            <select class="form-control" name="habilidad_solucionar">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Problemas</td>
                                                        <td>
                                                            <select class="form-control" name="problemas">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Creatividad</td>
                                                        <td>
                                                            <select class="form-control" name="creatividad">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Iniciativa</td>
                                                        <td>
                                                            <select class="form-control" name="iniciativa">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Competencia</td>
                                                        <td>
                                                            <select class="form-control" name="competencia">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Interpretación</td>
                                                        <td>
                                                            <select class="form-control" name="interpretacion">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Planificación</td>
                                                        <td>
                                                            <select class="form-control" name="planificacion">
                                                                <option>seleccion</option>
                                                                <option name="alta">Alta</option>
                                                                <option name="media">Media</option>
                                                                <option name="baja">Baja</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="observaciones" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES AVDB</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Area AVDB</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Alimentación</td>
                                                        <td>
                                                            <select class="form-control" name="alimentacion">
                                                                <option>seleccion</option>
                                                                <option name="independiente">Independiente</option>
                                                                <option name="semindependiente">Semindependiente</option>
                                                                <option name="dependiente">Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vestido</td>
                                                        <td>
                                                            <select class="form-control" name="vestido">
                                                                <option>seleccion</option>
                                                                <option name="independiente">Independiente</option>
                                                                <option name="semindependiente">Semindependiente</option>
                                                                <option name="dependiente">Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Higiene Mayor</td>
                                                        <td>
                                                            <select class="form-control" name="higiene_mayor">
                                                                <option>seleccion</option>
                                                                <option name="independiente">Independiente</option>
                                                                <option name="semindependiente">Semindependiente</option>
                                                                <option name="dependiente">Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Higiene menor</td>
                                                        <td>
                                                            <select class="form-control" name="higiene_menor">
                                                                <option>seleccion</option>
                                                                <option name="independiente">Independiente</option>
                                                                <option name="semindependiente">Semindependiente</option>
                                                                <option name="dependiente">Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Desplazamiento</td>
                                                        <td>
                                                            <select class="form-control" name="desplazamiento">
                                                                <option>seleccion</option>
                                                                <option name="independiente">Independiente</option>
                                                                <option name="semindependiente">Semindependiente</option>
                                                                <option name="dependiente">Dependiente</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" name="observaciones" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PERCETIVO</h2>
                                        <div class="body table-responsive">
                                            <table  class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>Sensibilidad Superficial (Calor Frio
                                                        Dolor)</td>
                                                    <td>
                                                        <select class="form-control" name="sensibilidad_superficial">
                                                            <option>seleccion</option>
                                                            <option name="funcional">Funcional</option>
                                                            <option name="semifuncional">Semifuncional</option>
                                                            <option name="no funcional">No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sensibilidad
                                                        Profunda (Barognosia
                                                        Esterognosia
                                                        Diferenciación
                                                        De texturas
                                                        Grafestesia)</td>
                                                    <td>
                                                        <select class="form-control" name="sensibilidad_profunda">
                                                            <option>seleccion</option>
                                                            <option name="funcional">Funcional</option>
                                                            <option name="semifuncional">Semifuncional</option>
                                                            <option name="no funcional">No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Visual (Agudeza Visual
                                                        Campo Visual
                                                        Forma
                                                        Color
                                                        Tamaño)</td>
                                                    <td>
                                                        <select class="form-control" name="visual">
                                                            <option>seleccion</option>
                                                            <option name="funcional">Funcional</option>
                                                            <option name="semifuncional">Semifuncional</option>
                                                            <option name="no funcional">No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Auditiva  (Fuerte
                                                        Leve
                                                        Vibrantes)</td>
                                                    <td>
                                                        <select class="form-control" name="auditiva">
                                                            <option>seleccion</option>
                                                            <option name="funcional">Funcional</option>
                                                            <option name="semifuncional">Semifuncional</option>
                                                            <option name="no funcional">No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Esquema
                                                        Corporal (Propio cuerpo
                                                        Partes finas
                                                        Partes gruesas)</td>
                                                    <td>
                                                        <select class="form-control" name="esquema_corporal">
                                                            <option>seleccion</option>
                                                            <option name="funcional">Funcional</option>
                                                            <option name="semifuncional">Semifuncional</option>
                                                            <option name="no funcional">No Funcional</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" nam="observaciones" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title" align="center">PATRONES FUNCIONALES DE MOVIMIENTO</h2>
                                        <div class="row clearfix">
                                            <div class="body table-responsive">
                                                <table  class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td  colspan="3" align="center">Patron</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Destreza manual</td>
                                                        <td>
                                                            <select class="form-control" name="destreza_manual">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Motricidad Gruesa</td>
                                                        <td>
                                                            <select class="form-control" name="motricidad_gruesa">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Motricidad Fina</td>
                                                        <td>
                                                            <select class="form-control" name="motricidad_fina">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Movimientos bilaterales</td>
                                                        <td>
                                                            <select class="form-control" name="movimiento_bilateral">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coordinación</td>
                                                        <td>
                                                            <select class="form-control" name="coordinacion">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Velocidad para el desempeño</td>
                                                        <td>
                                                            <select class="form-control" name="velocidad_desempeño">
                                                                <option>seleccion</option>
                                                                <option name="funcional">Funcional</option>
                                                                <option name="semifuncional">Semifuncional</option>
                                                                <option name="no funcional">No Funcional</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Observaciones.</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize"  name="observaciones" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
