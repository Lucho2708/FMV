<form method="POST" v-on:submit.prevent="createRegistro">
	<div class="modal fade" id="create-registro">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
					<h4>Nuevo registro</h4>
				</div>
				<div class="modal-body">
					
					@include('formulario.registro-paciente.paciente')

					@include('formulario.registro-paciente.acudiente')

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" value="Guardar">Crear</button>
				</div>
			</div>
		</div>
	</div>
</form>