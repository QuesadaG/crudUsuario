	<div class="container">
		<!---MODAL-->
		<div id="modalModificar" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-blue">
						<button type="button" class="close" data-dismiss= "modal">&times;</button>
						<h4 class="modal-title">Modificar Usuario</h4>						
					</div>
					<div class="modal-body">
						<input type="hidden" id="mtxtcodigo" name="id" disabled>
		
						<label>Username</label>
						<input type="text" id="mtxtuser" name="user" class="form-control">
						<?= br(1) ?>
						<label>Contrase&ntilde;a</label>
						<input type="password" id="mtxtpass" name="pass" class="form-control">
						<?= br(1) ?>
						<label>Nombre</label>
						<input type="text" id="mtxtnombre" name="nombre" class="form-control">
						<?= br(1) ?>
						<label>Apellido</label>
						<input type="text" id="mtxtapellido" name="apellido" class="form-control">
					</div>
					<div class="modal-footer">
						<button type="button" id="mbtnCancelar" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
						<button type="button" id="mbtnModificar" class="btn btn-primary">Modificar</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1 style="text-align: center;">Busqueda de Usuarios</h1>
				<label>Digite el nombre del usuario:</label>
				<input type="text" id="buscar" name="buscar" class="form-control">
				<?= br(1) ?>
				<center>
					<button class="btn btn-primary" id="btnBuscar" >Buscar</button>
				</center>
				<table class="table table-stripped" id="tblUsuarios">
					<?= br(2) ?>
					<caption style="text-align: center;">Registro de Usuarios</caption>
					<th style="text-align: center;">Codigo</th>
					<th style="text-align: center;" >Username</th>
					<th style="text-align: center;" >Nombre</th>
					<th style="text-align: center;" >Apellido</th>
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
									<button class="btn btn-primary" id="btnModal" data-toggle="modal" data-target="#modalModificar" onclick="editarUsuario(<?="'".$fila->Codigo."','". $fila->usuario."','". $fila->Nombre."','". $fila->Apellido."'" ?>);">Modificar</button> 
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