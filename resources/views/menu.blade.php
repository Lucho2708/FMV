<ul class="list">
    <li class="{{ Request::is('inicio') ? 'active' : null || Request::is('perfil')? 'active' : null }}">
        <a href="{{ route('inicio') }}">
            <i class="material-icons">home</i>
            <span>Inicio</span>
        </a>
    </li>
    <li class=" {{Route::is('usuario.*')? 'active' : null}}">
	    <a href="javascript:void(0);" class="menu-toggle">
	        <i class="material-icons">perm_identity</i>
	        <span>Usuarios</span>
	    </a>
    	<ul class="ml-menu">
	        <li class="{{ Route::is('usuario.index') ? 'active' : null}}">
	            <a href="{{route('usuario.index')}}">Ver Usuarios</a>
	        </li>
	        <li class="{{ Route::is('usuario.create') ? 'active' : null}}">
	            <a href="{{route('usuario.create')}}">Crear Usuarios</a>
	        </li>
    	</ul>
	</li>
	<li  class="{{ Request::is('acudiente') || Request::is('acudiente/create')? 'active' : null}}">
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">perm_identity</i>
            <span>Acudientes</span>
        </a>
        <ul class="ml-menu">
            <li class="{{ Request::is('acudiente')? 'active' : null}}">
                <a href="{{route('acudiente.index')}}">Ver Acudiente</a>
            </li>
            <li class="{{ Request::is('acudiente/create')? 'active' : null}}">
                <a href="{{route('acudiente.create')}}">Crear Acudiente</a>
            </li>

        </ul>
    </li>
    <li class="{{ Request::is('paciente') || Request::is('paciente/create')? 'active' : null}}" >
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">perm_identity</i>
            <span>Paciente</span>
        </a>
        <ul class="ml-menu">
            <li class="{{ Request::is('paciente') ? 'active' : null}}" >
                <a href="{{route('paciente.index')}}">Ver Paciente</a>
            </li>
            <li class="{{ Request::is('paciente/create')? 'active' : null}}" >
                <a href="{{route('paciente.create')}}">Crear Paciente</a>
            </li>

        </ul>
    </li>
    <li class="{{ Route::is('registro.*') ? 'active' : null}}">
        <a href="{{ route('registro.create') }}">
            <i class="material-icons">group_add</i>
            <span>Nuevo registro</span>
        </a>
    </li>
    <li class="{{ Request::is('cproceso') || Request::is('')? 'active' : null}}" >
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">assignment</i>
            <span>Formularios</span>
        </a>
        <ul class="ml-menu">
            <li class="{{ Request::is('cproceso') ? 'active' : null}}" >
                <a href="{!!URL::to('/cproceso')!!}">Cierre de proceso</a>
            </li>
            <li class="{{ Request::is('diario') ? 'active' : null}}" >
                <a href="{!!URL::to('/diario')!!}">Diario terapeutico</a>
            </li>
            <li class="{{ Request::is('hc') ? 'active' : null}}" >
                <a href="{!!URL::to('/hc')!!}">Historia clinica</a>
            </li>
            <li class="{{ Request::is('sproceso') ? 'active' : null}}" >
                <a href="{!!URL::to('/sproceso')!!}">Seguimiento de proceso</a>
            </li>
            <li class="{{ Request::is('rpsicologica') ? 'active' : null}}" >
                <a href="{!!URL::to('/rpsicologica')!!}">Remision Psicologica</a>
            </li>
            <li class="{{ Request::is('hingreso') ? 'active' : null}}" >
                <a href="{!!URL::to('/hingreso')!!}">Hoja de Ingreso</a>
            </li>
            <li class="{{ Request::is('eingreso') ? 'active' : null}}" >
                <a href="{!!URL::to('/eingreso')!!}">Epicrisis de Ingreso</a>
            </li>
            <li class="{{ Request::is('eegreso') ? 'active' : null}}" >
                <a href="{!!URL::to('/eegreso')!!}">Epicrisis de egreso</a>
            </li>
            <li class="{{ Request::is('eto') ? 'active' : null}}" >
                <a href="{!!URL::to('/eto')!!}">Evaluacion terapia ocupacional</a>
            </li>
            <li class="{{ Request::is('encuesta') ? 'active' : null}}" >
                <a href="{!!URL::to('/encuesta')!!}">Encuesta terapia ocupacional</a>
            </li>
            <li>
                <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
            </li>
        </ul>
    </li>

</ul>

