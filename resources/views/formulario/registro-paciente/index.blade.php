@extends('layouts.app')

@section('title')
FMV | Crear Registro
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')

<!-- Custom Content -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Pacientes
                    <small>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</small>
                </h2>
            </div>
            <div id="app">
                <crearpacientes></crearpacientes>
                <listarpacientes></listarpacientes>

            </div>
        </div>
    </div>
</div>
<!-- #END# Custom Content -->

@endsection
