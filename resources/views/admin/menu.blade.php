
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li @if ($menun1==0) class="active" @endif>
            <a href="{{url('/dashboard')}}">
                <i class="material-icons">home</i>
                <span>Inicio</span>
            </a>
        </li>
        <li @if ($menun1==1) class="active" @endif>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_identity</i>
                <span>Usuarios</span>
            </a>
            <ul class="ml-menu">
                <li @if ($menun2==1) class="active" @endif >
                    <a href="{{route('usuario.index')}}">Ver Usuarios</a>
                </li>
                <li @if ($menun2==2) class="active" @endif >
                    <a href="{{route('usuario.create')}}">Crear Usuarios</a>
                </li>

            </ul>
        </li>
        <li  @if ($menun1==2) class="active" @endif>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_identity</i>
                <span>Acudientes</span>
            </a>
            <ul class="ml-menu">
                <li  @if ($menun2==3) class="active" @endif>
                    <a href="{{route('acudiente.index')}}">Ver Acudiente</a>
                </li>
                <li  @if ($menun2==4) class="active" @endif>
                    <a href="{{route('acudiente.create')}}">Crear Acudiente</a>
                </li>

            </ul>
        </li>
        <li  @if ($menun1==3) class="active" @endif>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">perm_identity</i>
                <span>Paciente</span>
            </a>
            <ul class="ml-menu">
                <li  @if ($menun2==5) class="active" @endif>
                    <a href="{{route('paciente.index')}}">Ver Paciente</a>
                </li>
                <li  @if ($menun2==6) class="active" @endif>
                    <a href="{{route('paciente.create')}}">Crear Paciente</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>Forms</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{!!URL::to('/hv')!!}">Hoja de Vida</a>
                </li>
                <li>
                    <a href="{!!URL::to('/acudiente')!!}">Datos Acudiente</a>
                </li>
                <li>
                    <a href="{!!URL::to('/diario')!!}">Diario terapeutico</a>
                </li>
                <li>
                    <a href="{!!URL::to('/hc')!!}">Historia clinica</a>
                </li>
                <li>
                    <a href="{!!URL::to('/sproceso')!!}">Seguimiento de proceso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/cproceso')!!}">Cierre de proceso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/rpsicologica')!!}">Remision Psicologica</a>
                </li>
                <li>
                    <a href="{!!URL::to('/hingreso')!!}">Hoja de Ingreso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/eingreso')!!}">Epicrisis de Ingreso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/eegreso')!!}">Epicrisis de egreso</a>
                </li>
                <li>
                    <a href="{!!URL::to('/eto')!!}">Evaluacion terapia ocupacional</a>
                </li>
                <li>
                    <a href="{!!URL::to('/encuesta')!!}">Encuesta terapia ocupacional</a>
                </li>
                <li>
                    <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                </li>
            </ul>
        </li>

    </ul>
</div>