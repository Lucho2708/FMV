@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 0,$menun2=0))
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Perfil</div>

                <div class="panel-body">
                    <img src="/images/{{ $user->avatar}}" style="width: 150px; height: 150px; float:left; border-radius: 50%; margin-right:25px ">
                    <h2>{{ $user->nombres }} {{ $user->apellidos }}</h2>
                    <form enctype="multipart/form-data" action="/perfil" method="POST">
                        <label>Actualizar imagen de perfil</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection