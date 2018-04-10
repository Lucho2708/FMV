@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 0,$menun2=0))
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')

INICIO

@endsection