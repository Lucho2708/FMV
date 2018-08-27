new Vue({
	el: '#crudregistros',
	created: function(){
		this.getRegistros();
	},
	data: {
		registros: [],
	},
	methods: {
		getRegistros: function (){
			var urlRegistros = 'registro';
			axios.get(urlRegistros).then(response => {
				console.log(response);
				this.registros = response.data;
			});
		},
		deleteRegistros: function(registro){
			var urlDelete = 'registro/'+ registro.id ;
			axios.delete(urlDelete).then(response => {
				this.getRegistros();
				toastr.success('Eliminado correctamente');
			});
		}
	}
});