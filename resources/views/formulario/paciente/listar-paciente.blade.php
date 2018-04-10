@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 3,$menun2=5))
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')

@endsection