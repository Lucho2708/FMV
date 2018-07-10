<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>LOGIN</b></a>
            <small>ADMINISTRADOR</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="msg">Inicio sesion para comenzar.</div>
                    <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div @if ($errors->has('email')) class="form-line error" @endif class="form-line">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" required autofocus >
                        </div>
                        @if ($errors->has('email'))
                            <label class="error">{{ $errors->first('email') }}</label> 
                        @endif
                    </div>
                    <div class="input-group" {{ $errors->has('password') ? ' has-error' : '' }}>
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div @if ($errors->has('password')) class="form-line error" @endif class="form-line">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                        @if ($errors->has('password'))
                            <label class="error">{{ $errors->first('password') }}</label> 
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Recuerdame</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Entrar</button>
                        </div>
                    </div>
                    <!--<div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>-->
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{asset('/js/admin.js')}}"></script>

</body>

</html>

