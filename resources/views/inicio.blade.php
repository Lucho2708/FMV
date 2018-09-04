@extends('layouts.app')

@section('title')
FMV | Inicio
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')

<div class="row clearfix">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	    <div class="info-box bg-blue hover-expand-effect">
	        <div class="icon">
	            <i class="material-icons">account_circle</i>
	        </div>
	        <div class="content">
	            <div class="text">USUARIOS</div>
	            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	    <div class="info-box bg-purple hover-expand-effect">
	        <div class="icon">
	            <i class="material-icons">assignment_turned_in</i>
	        </div>
	        <div class="content">
	            <div class="text">PACIENTES</div>
	            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	    <div class="info-box bg-yellow hover-expand-effect">
	        <div class="icon">
	            <i class="material-icons">folder_shared</i>
	        </div>
	        <div class="content">
	            <div class="text">PROCESOS</div>
	            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
	        </div>
	    </div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	    <div class="info-box bg-light-green hover-expand-effect">
	        <div class="icon">
	            <i class="material-icons">check_circle</i>
	        </div>
	        <div class="content">
	            <div class="text">REHABILITADOS</div>
	            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
	        </div>
	    </div>
	</div>
</div>

<div class="row clearfix">
    <!-- Task Info -->
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="card">
            <div class="header">
                <h2>PACIENTES REGISTRADOS RESIENTEMENTE</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover dashboard-task-infos">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>T.D</th>
                                <th>N° Identidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Task A</td>
                                <td><span class="label bg-green">Doing</span></td>
                                <td>John Doe</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Task B</td>
                                <td><span class="label bg-blue">To Do</span></td>
                                <td>John Doe</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Task C</td>
                                <td><span class="label bg-light-blue">On Hold</span></td>
                                <td>John Doe</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Task D</td>
                                <td><span class="label bg-orange">Wait Approvel</span></td>
                                <td>John Doe</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Task E</td>
                                <td>
                                    <span class="label bg-red">Suspended</span>
                                </td>
                                <td>John Doe</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Task Info -->
    <!-- Browser Usage -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="header">
                <h2>USUARIOS EN LINEA</h2>
                
            </div>
            <div class="body">
                <div id="donut_chart" class="dashboard-donut-chart"></div>
            </div>
        </div>
    </div>
    <!-- #END# Browser Usage -->
</div>

@endsection

@section('js')

@endsection