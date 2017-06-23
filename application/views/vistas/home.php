	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<table class="table table-stripped">
					<caption style="text-align: center;">REGISTRO DE USUARIOS</caption>
					<th>Codigo</th>
					<th>Username</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<?php
						foreach ($registro as $fila) 
						{
					?>
					<tr>
						<td>
							<?= $fila->Codigo; ?>
						</td>

						<td>
							<?= $fila->usuario; ?>
						</td>

						<td>
							<?= $fila->Nombre; ?>
						</td>

						<td>
							<?= $fila->Apellido; ?>
						</td>
					</tr>
					<?php
						}	
					?>
				</table>
			</div>	
		</div>		
	</div>
		
