	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>Agregar Nuevos Usuarios</h1>
				<label>Nombre:</label> <?= nbs(5) ?>
				<input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre" required>
				<?= br(2) ?>
				<label>Apellido: </label>
				<?= nbs(4) ?>
				<input type="text" id="apellido" name="apellido" placeholder="Escriba su apellido" required>
				<?= br(2) ?>
				<label>Usuario: </label> <?= nbs(5) ?>
				<input type="text" id="user" name="user" placeholder="Escriba su usuario" required>
				<?= br(2) ?>
				<label>Contrase&ntilde;a: </label>
				<input type="password" id="pass" name="pass" placeholder="Escriba su contrase&ntilde;a" required>
				<?= br(2) ?>
				<?= nbs(30) ?>
				<button class="btn btn-primary" id="btnAgregar" value="Agregar">Agregar</button>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	