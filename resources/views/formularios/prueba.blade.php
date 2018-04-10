@extends('dashboard')

@section('topbar')
    @include('admin.topbar')
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')

    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CREAR USUARIOS
                        </h2>
                    </div>
                    <div class="body">
                        {!! Form::open(['route' => 'hoja-vida.store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('nombres','Nombre') !!}
                            {!! Form::text('nombres',null,['class' =>'form-control', 'placeholder' =>'Nombre Completo','required'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('ciudad','ciudad') !!}
                            {!! Form::text('ciudad',null,['class' =>'form-control', 'placeholder' =>'ciudad','required'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}

                        </div>


                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
