<div class="row clearfix">
    <div class="col-sm-4"  id="list">
        <div>
            <div class="form">
                <img src="{{ asset('/images/user.png') }}"  style="width: 100%; height: 50%; float:left; border-radius: 50%; margin-right:25px">
                <input type="file" class="form-control" name="foto" id="files">
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="col-sm-12">
            <label>Nombre</label>
            <div class="input-group" >
                <div  class="form-line">
                    <input name="PNombres" type="text" class="form-control" placeholder="Nombres" value=""/>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <label>Apellidos</label>
            <div class="input-group" >
                <div class="form-line">
                    <input name="PApellidos" type="text" class="form-control" placeholder="Apellidos" value=""/>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-sm-6">
        <label>Tipo de Documento</label>
        <select class="form-control" name="PTipoDocumento" required>
            <option>-- Seleccione --</option>
            <option name="CC">CC</option>
            <option name="TI">TI</option>
            <option name="CE">CE</option>
            <option name="RC">RC</option>
        </select>
    </div>
    <div class="col-sm-6">
        <label>No. Documento</label>
        <div class="input-group" >
            <div class="form-line">
                <input type="number" class="form-control date" name="PDocumento" placeholder="Numero Identidad" value=""/>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-sm-6">
        <label>Ciudad de nacimiento</label>
        <select class="form-control" name="PUbicacion" data-live-search="true" required>
            <option>-- Selecciona ubicacion --</option>
            <option  value=""></option>
        </select>
    </div>

    <div class="col-sm-6">
        <label>Fecha de nacimiento</label>
        <div class="input-group" >
            <div class="form-line">
                <input type="date" class="form-control" name="PFechaNacimiento" value=""/>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-sm-6">
        <label>Eps</label>
        <select class="form-control" name="PEps" data-live-search="true" >
            <option>-- Selecciona eps --</option>
            <option  value=""></option>
        </select>
    </div>
    <div class="col-sm-6">
        <label>Genero</label>
        <select class="form-control" name="PGenero" required>
            <option>-- Seleccione --</option>
            <option name="Masculino">Masculino</option>
            <option name="Femenino">Femenino</option>
        </select>
    </div>
</div>
<div class="row clearfix">
    <div class="col-sm-3">
        <label>Rh</label>
        <div class="input-group" >
            <div class="form-line">
                <input type="text" class="form-control" name="PRh" value="{{ old('PRh') }}"/>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <label>Hijos</label>
        <div class="input-group" >
            <div class="form-line">
                <input type="number" name="PHijos" class="form-control" min="0" value=""/>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <label>Alias</label>
        <div class="input-group" >
            <div class="form-line">
                <input type="text" class="form-control" name="PAlias" value=""/>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-6">
        <label>Nivel Educativo</label>
        <select class="form-control" name="PEstudios">
            <option>-- Seleccione --</option>
            <option name="primaria">Primaria</option>
            <option name="secundaria">Secundaria</option>
            <option name="universitario">Universitario</option>
            <option name="ninguno">Ninguno</option>
        </select>
    </div>
    <div class="col-md-6">
        <label>Estado Civil</label>
        <select class="form-control" name="PEstadoCivil" required>
            <option>-- Seleccione --</option>
            <option name="soltero(a)">Soltero(a)</option>
            <option name="casado(a)">Casado(a)</option>
            <option name="viudo(a)">Viudo(a)</option>
            <option name="union_libre">Union Libre</option>
        </select>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        <label>Observaciones generales:</label>
        <div class="input-group" >
            <div class="form-line">
                <textarea rows="4" name="PObservacion"  class="form-control no-resize auto-growth" name="senales" placeholder="Descripcion del paciente, rasgos fisicos, estado de salud, entre otros." value=""></textarea>
            </div>
        </div>
    </div>
</div>
