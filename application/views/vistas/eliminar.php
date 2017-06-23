	<div class="container">

		<div class="modal fade" role="dialogo" id="modalEliminar">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header bg-blue">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Eliminar Usuarios</h4>
					</div>
					<div class="modal-body">
						<input type="hidden" id="mtxtCodigo" name="mtxtCodigo">
						<label>¿Esta seguro de eliminar al siguiente usuario?</label>
						<?= br(1) ?>
						<label>Los siguientes datos se borraran de los registros</label>
						<?= br(1) ?>
						<label>Nombre</label>
						<input type="text" id="mtxtNombre" name="mtxtNombre" class="form-control" disabled>
						<?= br(1) ?>
						<label>Apellido</label>
						<input type="text" id="mtxtApellido" name="mtxtApellido" class="form-control" disabled>
						<?= br(1) ?>
						<label>Usuario</label>
						<input type="text" id="mtxtUsuario" name="mtxtUsuario" class="form-control" disabled>
					</div>
					<div class="modal-footer">
						<button type="button" id="mbtnCancelar" name="mbtnCancelar" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
						<button type="button" id="mbtnEliminar" name="mbtnEliminar" class="btn btn-primary">Eliminar</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1 style="text-align: center;">Busqueda de Usuarios</h1>
				<label>Digite el nombre del usuario:</label>
				<input type="text" name="txtBuscar" name="txtBuscar" class="form-control">
				<?= br(1) ?>
				<center>
					<button class="btn btn-primary" id="btnBuscar">Buscar</button>
				</center>
				<table class="table table-stripped" id="tblUsuarios">
					<?= br(2) ?>
					<caption style="text-align: center;">Registros de Usuario</caption>
					<th style="text-align: center;">Codigo</th>
					<th style="text-align: center;">Username</th>
					<th style="text-align: center;">Nombre</th>
					<th style="text-align: center;">Apellido</th>
					<th style="text-align: center;">Accion</th>
					
					<?php
						foreach ($registro as $fila) 
						{
					?>

							<tr>
								<td style="text-align: center;"> <?= $fila->Codigo ?> </td>
								<td style="text-align: center;"> <?= $fila->usuario ?> </td>
								<td style="text-align: center;"> <?= $fila->Nombre ?> </td>
								<td style="text-align: center;"> <?= $fila->Apellido ?> </td>
								<td>
									<center>
										<button class="btn btn-primary" id="btnModal" data-toggle="modal" data-target="#modalEliminar" onclick="eliminarUsuario(<?= "'".$fila->Codigo."','".$fila->usuario."','".$fila->Nombre."','".$fila->Apellido."'" ?>);">Eliminar</button>
									</center>
								</td>
							</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
	</div>