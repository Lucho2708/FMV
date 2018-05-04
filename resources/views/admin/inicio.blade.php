@extends('dashboard')

@section('topbar')
    @include('admin.topbar',compact($menun1 = 0,$menun2=0))
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('contenido')

INICIO

<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <div class="icon bg-red">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW ORDERS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <div class="icon bg-indigo">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW MEMBERS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <div class="icon bg-purple">
                            <i class="material-icons">bookmark</i>
                        </div>
                        <div class="content">
                            <div class="text">BOOKMARKS</div>
                            <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <div class="icon bg-deep-purple">
                            <i class="material-icons">favorite</i>
                        </div>
                        <div class="content">
                            <div class="text">LIKES</div>
                            <div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

@endsection