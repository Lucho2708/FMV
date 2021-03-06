@extends('layouts.app')

@section('title')
FMV | Crear Paciente
@endsection

@section('css')

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
                                    <div  id="estilo-foto" class="glyphicon glyphicon-picture">
                                        <div class="form">
                                            <input type="file" class="form-control" name="foto" id="files">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <label>Nombres</label>
                                    <div class="input-group {{ $errors->has('nombres') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('nombres')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="nombres"  placeholder="Nombres" value="{{ old('nombres') }}"/>
                                        </div>
                                        @if ($errors->has('nombres'))
                                            <label class="error">{{ $errors->first('nombres') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <label>Apellidos</label>
                                    <div class="input-group {{ $errors->has('apellidos') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('apellidos')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}"/>
                                        </div>
                                        @if ($errors->has('apellidos'))
                                            <label class="error">{{ $errors->first('apellidos') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <label>Fecha Nacimiento</label>
                                    <div class="input-group {{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('fecha_nacimiento')) class="form-line error" @endif class="form-line">
                                            <input type="date" class="form-control date" name="fecha_nacimiento"  value="{{ old('fecha_nacimiento') }}"/>
                                        </div>
                                        @if ($errors->has('fecha_nacimiento'))
                                            <label class="error">{{ $errors->first('fecha_nacimiento') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Edad</label>
                                    <div class="input-group {{ $errors->has('edad') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('edad')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="edad" placeholder="Edad" value="{{ old('edad') }}"/>
                                        </div>
                                        @if ($errors->has('edad'))
                                            <label class="error">{{ $errors->first('edad') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Tipo de Documento</label>
                                    <select class="form-control" name="tipo_documento" required>
                                        <option>-- Seleccione --</option>
                                        <option name="CC" @if (old('tipo_documento'))=='CC' selected @endif>CC</option>
                                        <option name="TI" @if (old('tipo_documento'))=='TI' selected @endif>TI</option>
                                        <option name="CE" @if (old('tipo_documento'))=='CE' selected @endif>CE</option>
                                        <option name="RC" @if (old('tipo_documento'))=='RC' selected @endif>RC</option>
                                    </select>
                                    @if ($errors->has('tipo_documento'))
                                        <label class="error">{{ $errors->first('tipo_documento') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <label>Documento</label>
                                    <div class="input-group {{ $errors->has('documento') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('documento')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="documento" placeholder="Numero Identidad" value="{{ old('documento') }}"/>
                                        </div>
                                        @if ($errors->has('documento'))
                                            <label class="error">{{ $errors->first('documento') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Sexo</label>
                                    <select class="form-control" name="genero">
                                        <option>-- Seleccione --</option>
                                        <option name="Masculino" @if (old('genero'))=='Masculino' selected @endif>Masculino</option>
                                        <option name="Femenino" @if (old('genero'))=='Femenino' selected @endif>Femenino</option>
                                    </select>
                                    @if ($errors->has('genero'))
                                        <label class="error">{{ $errors->first('genero') }}</label>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label>Ubicacion</label>
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
                                    <label>Procedencia</label>
                                    <div class="input-group {{ $errors->has('procedencia') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('procedencia')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date"  name="procedencia" placeholder="Lugar nacimiento" value="{{ old('procedencia') }}"/>
                                        </div>
                                        @if ($errors->has('procedencia'))
                                            <label class="error">{{ $errors->first('procedencia') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Eps</label>
                                    <select class="form-control" name="eps_id"  data-live-search="true" required>
                                        <option>-- Seleccione --</option>
                                        @foreach($eps as $eps)
                                            <option value={{ $eps->id }}>{{$eps->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Fecha Ingreso</label>
                                    <div class="input-group {{ $errors->has('fecha_ingreso') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('procedencia')) class="form-line error" @endif class="form-line">
                                            <input type="date" class="form-control date" name="fecha_ingreso"  value="{{ old('fecha_ingreso') }}"/>
                                        </div>
                                        @if ($errors->has('fecha_ingreso'))
                                            <label class="error">{{ $errors->first('fecha_ingreso') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <label>Estado Civil</label>
                                    <select class="form-control" name="estado_civil" required>
                                        <option>-- Seleccione --</option>
                                        <option name="soltero(a)" @if (old('estado_civil'))=='soltero(a)' selected @endif>Soltero(a)</option>
                                        <option name="casado(a)" @if (old('estado_civil'))=='casado(a)' selected @endif>Casado(a)</option>
                                        <option name="viudo(a)" @if (old('estado_civil'))=='viudo(a)' selected @endif>Viudo(a)</option>
                                        <option name="union libre" @if (old('estado_civil'))=='union libre' selected @endif>Union Libre</option>
                                    </select>
                                    @if ($errors->has('estado_civil'))
                                        <label class="error">{{ $errors->first('estado_civil') }}</label>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label>Hijos</label>
                                    <div class="input-group {{ $errors->has('hijos') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('hijos')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="hijos" placeholder="No. Hijos" value="{{ old('hijos') }}"/>
                                        </div>
                                        @if ($errors->has('hijos'))
                                            <label class="error">{{ $errors->first('hijos') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Alias</label>
                                    <div class="input-group{{ $errors->has('alias') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('alias')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="alias" placeholder="Alias" value="{{ old('alias') }}"/>
                                        </div>
                                        @if ($errors->has('alias'))
                                            <label class="error">{{ $errors->first('alias') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <label>Señales</label>
                                    <div class="input-group {{ $errors->has('senales') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('senales')) class="form-line error" @endif class="form-line">
                                            <textarea rows="1" cols="1" class="form-control no-resize" name="senales" placeholder="Señales" value="{{ old('senales') }}"></textarea>
                                        </div>
                                        @if ($errors->has('senales'))
                                            <label class="error">{{ $errors->first('senales') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Rh</label>
                                    <div class="input-group{{ $errors->has('rh') ? ' has-error' : '' }}" >
                                        <div  @if ($errors->has('rh')) class="form-line error" @endif class="form-line">
                                            <input type="text" class="form-control date" name="rh" placeholder="RH" value="{{ old('rh') }}"/>
                                        </div>
                                        @if ($errors->has('rh'))
                                            <label class="error">{{ $errors->first('rh') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Nivel Educativo</label>
                                    <select class="form-control" name="estudios">
                                        <option>-- Seleccione --</option>
                                        <option name="primaria" @if (old('estudios'))=='primaria' selected @endif>Primaria</option>
                                        <option name="secundaria" @if (old('estudios'))=='secundaria' selected @endif>Secundaria</option>
                                        <option name="universitaria" @if (old('estudios'))=='universitaria' selected @endif>Universitaria</option>
                                        <option name="ninguno" @if (old('estudios'))=='ninguno' selected @endif>Ninguno</option>
                                    </select>
                                    @if ($errors->has('estudios'))
                                        <label class="error">{{ $errors->first('estudios') }}</label>
                                    @endif
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
@endsection