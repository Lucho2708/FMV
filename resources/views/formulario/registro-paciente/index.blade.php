@extends('layouts.app')

@section('title')
FMV | Crear Registro
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
    
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
            <div id="crudregistros" class="body">
            	<div class="row clearfix">
            		<div class="col-sm-12">
	            		<button type="button" class="btn btn-primary btn-circle pull-right waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom"  data-original-title="Crear registro">
	            			<i class="material-icons">create_new_folder</i>
	            		</button>
            		</div>
            	</div>
            	<hr>
                <div class="row clearfix">
					<div v-for="registro in registros" class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<img v-bind:src="registro.avatar" width="100%">
							<div class="caption">
								<h4>@{{ registro.nombres}} @{{ registro.apellidos}}</h4>
								<p>@{{registro.tipo_documento}}: @{{ registro.documento}}</p>
								<hr>
								<div class="row">
									<div class="col-md-4">
										<button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" data-original-title="Ver">
											<i class="material-icons">remove_red_eye</i>
										</button>
									</div>
									<div class="col-md-4">
										<button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" data-original-title="Actualizar">
											<i class="material-icons">mode_edit</i>
										</button>
									</div>
									<div class="col-md-4">
										<button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" data-original-title="Eliminar" v-on:click.prevent="deleteRegistros(registro)">
											<i class="material-icons">delete_forever</i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!--
                <div class="row">
                	<div class="col-sm-12">
						
					</div>
                </div>
                -->

                <div class="row clearfix">
                	<div class="col-sm-12">
	                	<pre>
	                		@{{ $data }}
	                	</pre>
	                </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- #END# Custom Content -->

@endsection

@section('js')
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/pages/ui/tooltips-popovers.js') }}"></script>

@endsection