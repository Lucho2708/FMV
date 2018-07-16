<ul class="list">
    <li class="{{ Request::is('inicio') ? 'active' : null || Request::is('perfil')? 'active' : null }}">
        <a href="{{ route('inicio') }}">
            <i class="material-icons">home</i>
            <span>Inicio</span>
        </a>
    </li>
    <li class=" {{ Request::is('usuario') || Request::is('usuario/create') || Route::is('usuario.edit')? 'active' : null}}">
	    <a href="javascript:void(0);" class="menu-toggle">
	        <i class="material-icons">perm_identity</i>
	        <span>Usuarios</span>
	    </a>
    	<ul class="ml-menu">
	        <li class="{{ Request::is('usuario') ? 'active' : null}}">
	            <a href="{{route('usuario.index')}}">Ver Usuarios</a>
	        </li>
	        <li class="{{ Request::is('usuario/create') ? 'active' : null}}">
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
</ul>
