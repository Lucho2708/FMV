@extends('layouts.app')

@section('title')
FMV | Crear Registro
@endsection

@section('css')
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
            <div class="body">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/images/1525364066.jpg') }}" width="100%">
                            <div class="caption">
                                <h4>Luis Eduardo Silva Rodriguez</h4>
                                <p>1070608568</p>
                                <hr>
                                <div class="row">
                                	<div class="col-md-4">
		                                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver">
				            				<i class="material-icons">remove_red_eye</i>
				        				</button>
			        				</div>
			        				<div class="col-md-4">
								        <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Actualizar">
								            <i class="material-icons">mode_edit</i>
								        </button>
								    </div>
								    <div class="col-md-4">
								        <button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar">
								            <i class="material-icons">delete_forever</i>
								        </button>
								    </div>
						        </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/images/1525364066.jpg') }}" width="100%">
                            <div class="caption">
                                <h4>Luis Eduardo Silva Rodriguez</h4>
                                <p>1070608568</p>
                                <hr>
                                <div class="row">
                                	<div class="col-md-4">
		                                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver">
				            				<i class="material-icons">remove_red_eye</i>
				        				</button>
			        				</div>
			        				<div class="col-md-4">
								        <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Actualizar">
								            <i class="material-icons">mode_edit</i>
								        </button>
								    </div>
								    <div class="col-md-4">
								        <button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar">
								            <i class="material-icons">delete_forever</i>
								        </button>
								    </div>
						        </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/images/1525364066.jpg') }}" width="100%">
                            <div class="caption">
                                <h4>Luis Eduardo Silva Rodriguez</h4>
                                <p>1070608568</p>
                                <hr>
                                <div class="row">
                                	<div class="col-md-4">
		                                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver">
				            				<i class="material-icons">remove_red_eye</i>
				        				</button>
			        				</div>
			        				<div class="col-md-4">
								        <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Actualizar">
								            <i class="material-icons">mode_edit</i>
								        </button>
								    </div>
								    <div class="col-md-4">
								        <button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar">
								            <i class="material-icons">delete_forever</i>
								        </button>
								    </div>
						        </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/images/1525364066.jpg') }}" width="100%">
                            <div class="caption">
                                <h4>Luis Eduardo Silva Rodriguez</h4>
                                <p>1070608568</p>
                                <hr>
                                <div class="row">
                                	<div class="col-md-4">
		                                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver">
				            				<i class="material-icons">remove_red_eye</i>
				        				</button>
			        				</div>
			        				<div class="col-md-4">
								        <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Actualizar">
								            <i class="material-icons">mode_edit</i>
								        </button>
								    </div>
								    <div class="col-md-4">
								        <button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar">
								            <i class="material-icons">delete_forever</i>
								        </button>
								    </div>
						        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/images/1525364066.jpg') }}" width="100%">
                            <div class="caption">
                                <h4>Luis Eduardo Silva Rodriguez</h4>
                                <p>1070608568</p>
                                <hr>
                                <div class="row">
                                	<div class="col-md-4">
		                                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver">
				            				<i class="material-icons">remove_red_eye</i>
				        				</button>
			        				</div>
			        				<div class="col-md-4">
								        <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Actualizar">
								            <i class="material-icons">mode_edit</i>
								        </button>
								    </div>
								    <div class="col-md-4">
								        <button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar">
								            <i class="material-icons">delete_forever</i>
								        </button>
								    </div>
						        </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/images/1525364066.jpg') }}" width="100%">
                            <div class="caption">
                                <h4>Luis Eduardo Silva Rodriguez</h4>
                                <p>1070608568</p>
                                <hr>
                                <div class="row">
                                	<div class="col-md-4">
		                                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver">
				            				<i class="material-icons">remove_red_eye</i>
				        				</button>
			        				</div>
			        				<div class="col-md-4">
								        <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Actualizar">
								            <i class="material-icons">mode_edit</i>
								        </button>
								    </div>
								    <div class="col-md-4">
								        <button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar">
								            <i class="material-icons">delete_forever</i>
								        </button>
								    </div>
						        </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/images/1525364066.jpg') }}" width="100%">
                            <div class="caption">
                                <h4>Luis Eduardo Silva Rodriguez</h4>
                                <p>1070608568</p>
                                <hr>
                                <div class="row">
                                	<div class="col-md-4">
		                                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver">
				            				<i class="material-icons">remove_red_eye</i>
				        				</button>
			        				</div>
			        				<div class="col-md-4">
								        <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Actualizar">
								            <i class="material-icons">mode_edit</i>
								        </button>
								    </div>
								    <div class="col-md-4">
								        <button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar">
								            <i class="material-icons">delete_forever</i>
								        </button>
								    </div>
						        </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ asset('/images/1525364066.jpg') }}" width="100%">
                            <div class="caption">
                                <h4>Luis Eduardo Silva Rodriguez</h4>
                                <p>1070608568</p>
                                <hr>
                                <div class="row">
                                	<div class="col-md-4">
		                                <button type="button" class="btn bg-light-green btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ver">
				            				<i class="material-icons">remove_red_eye</i>
				        				</button>
			        				</div>
			        				<div class="col-md-4">
								        <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Actualizar">
								            <i class="material-icons">mode_edit</i>
								        </button>
								    </div>
								    <div class="col-md-4">
								        <button type="button" class="btn btn btn-danger btn-circle waves-effect waves-circle waves-float" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar">
								            <i class="material-icons">delete_forever</i>
								        </button>
								    </div>
						        </div>
                            </div>
                        </div>
                    </div>

                   
                </div>

            </div>
        </div>
    </div>
</div>
<!-- #END# Custom Content -->

@endsection

@section('js')
<script src="{{ asset('/js/pages/ui/tooltips-popovers.js') }}"></script>
@endsection