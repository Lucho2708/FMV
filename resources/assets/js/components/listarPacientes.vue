<template>
<div  class="body">
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
                    <h4>{{ registro.nombres}} {{ registro.apellidos}}</h4>
                    <p>{{registro.tipo_documento}}: {{ registro.documento}}</p>
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
</div>
</template>
<script>

    import VueFormWizard from 'vue-form-wizard'

	export default {
		data: function() {
			return{
				registros: [],
				newRegistros: '',
			}		
		},
		created: function(){
            this.getRegistros();
        },
		methods: {
			getRegistros: function(){
				var urlRegistro = 'registro';
				axios.get(urlRegistro).then(response =>{
					this.registros = response.data;
				});
			},
            deleteRegistros: function(registro){
                var urlDelete = 'registro/'+ registro.id ;
                axios.delete(urlDelete).then(response => {
                    this.getRegistros();
                    console.log('Eliminado correctamente');
                    toastr.success('Eliminado correctamente');
                });
            }
		}
	};
</script>