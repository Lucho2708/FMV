@extends('layouts.app')

@section('title')
FMV | Crear Paciente
@endsection

@section('css')
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
    <style>
        .thumb {
            margin: 1px 1px;
            width: 150px;
            height: 150px;
            float:left;
            border-radius: 50%;
            margin-right:25px
        }

        #estilo-foto{
            width: 150px;
            padding: 20px;
            margin: 50px;
            position: relative;
            font-size: 30px;
        }

        #files{
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 0;
        }
    </style>
@endsection

@section('js')
    <script type="text/javascript">
        function archivo(evt) {
            var files = evt.target.files; // FileList object

            // Obtenemos la imagen del campo "file".
            for (var i = 0, f; f = files[i]; i++) {
                //Solo admitimos imágenes.
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                reader.onload = (function(theFile) {
                    return function(e) {
                        // Insertamos la imagen
                        document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                    };
                })(f);

                reader.readAsDataURL(f);
            }
        }
        document.getElementById('files').addEventListener('change', archivo, false);
    </script>
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h1>
                HOJA DE VIDA
            </h1>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <br>
                    <div class="body">
                        {!! Form::open(['route' => 'paciente.store', 'method' => 'POST',$ubicacion,'files'=> true ]) !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row clearfix">
                                        <div class="col-md-2" id="list">
                                            <img  src="/images/perfil-d.jpeg"  style="width: 150px; height: 150px; float:left; border-radius: 50%; margin-right:25px ">
                                        </div>
                                        <div class="col-md-3">
                                            <div  id="estilo-foto" class="glyphicon glyphicon-download-alt ">
                                                <div class="form">
                                                    <input type="file" class="form-control" name="foto" id="files">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="nombres"  placeholder="Nombres">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="edad" placeholder="Edad">
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
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="documento" placeholder="Numero Identidad">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" name="genero">
                                                <option>-- Seleccione Sexo --</option>
                                                <option name="Masculino">Masculino</option>
                                                <option name="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" name="ubicacion_id" data-live-search="true" required>
                                                <option>-- Selecciona ubicacion --</option>
                                                @foreach($ubicacion as $ubicacion)
                                                    <option value="{{$ubicacion->id}}">{{$ubicacion->ciudad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date"  name="procedencia" placeholder="Grupo Etnico">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" name="eps_id"  data-live-search="true" required>
                                                <option>-- Selecciona Eps --</option>
                                                @foreach($eps as $eps)
                                                    <option value={{ $eps->id }}>{{$eps->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="datepicker form-control" name="fecha_ingreso" placeholder="Fecha de Ingreso">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <select class="form-control" name="estado_civil">
                                                <option>-- Seleccione Estado Civil --</option>
                                                <option name="soltero(a)">Soltero(a)</option>
                                                <option name="casado(a)">Casado(a)</option>
                                                <option name="viudo(a)">Viudo(a)</option>
                                                <option name="union libre">union libre</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="hijos" placeholder="No. Hijos">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="alias" placeholder="Alias">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <textarea rows="1" cols="1" class="form-control no-resize" name="senales" placeholder="Señales"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="rh" placeholder="RH">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" name="Estudio">
                                                <option>-- Seleccione Nivel Educativo --</option>
                                                <option name="primaria">Primaria</option>
                                                <option name="secundaria">Secundaria</option>
                                                <option name="universitaria">Universitaria</option>
                                                <option name="ninguno">Ninguno</option>
                                            </select>
                                        </div>
                                    </div>
                                  {!! Form::submit('Crear', ['class' =>'btn btn-primary']) !!}
                                  {!! Form::reset('Cancelar', ['class' =>'btn btn-danger']) !!}
                                </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection