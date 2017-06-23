$(document).ready(function()
{
	//FUNCIONES PARA ENVIO DE DATOS VIA AJAX, USO DE CRUD
	$("#btnAgregar").click(function()
	{
		var nombre = $('#nombre').val();
		var apellido = $('#apellido').val();
		var usuario = $('#user').val();
		var pass = $('#pass').val();

		if(nombre == "" || apellido == "" || usuario == "" || pass == "")
		{
			alert("Complete los campos correctamente para continuar");
		}
		else
		{
			$.ajax({
			'method': 'POST',
			'url': 'agregar',
			'data': {nombre:nombre, apellido:apellido,usuario:usuario, pass:pass}
			})
			.done(function(res){
				alert(res);
				$("#nombre").val("");
				$("#apellido").val("");
				$("#user").val("");
				$("#pass").val("");
			});
		}

		
	});

	$("#mbtnModificar").click(function()
	{
		var codigo = $("#mtxtcodigo").val();
		var nombre = $("#mtxtnombre").val();
		var apellido = $("#mtxtapellido").val();
		var usuario = $("#mtxtuser").val();
		var pass = $("#mtxtpass").val();
		console.log(pass);
		$.ajax({
			'method' : 'POST',
			'url' : 'modificar',
			'data' : {codigo: codigo, usuario:usuario, pass:pass, nombre:nombre, apellido:apellido}
		})
		.done(function(res){
			if(res != 1)
			{
				$("#mbtnCancelar").click();
				alert("Datos modificados exitosamente.");
				location.reload();
			}
			else
			{
				$("#mbtnCancelar").click();
				alert("Error al eliminar datos.");
				location.reload();
			}
		});
	});

	$("#mbtnEliminar").click(function()
	{
		var codigo = $("#mtxtCodigo").val();

		$.ajax({
			'method' : 'POST',
			'url' : 'eliminar',
			'data' : {codigo:codigo}
		})
		.done(function(res){
			if(res != 1)
			{
				$("#mbtnCancelar").click();
				alert("Datos eliminados correctamente.");
				location.reload();
			}
			else
			{
				$("#mbtnCancelar").click();
				alert("Error al eliminar datos.");
				location.reload();
			}
		})


	});

	//FIN FUNCIONES CRUD

	//FUNCION PARA FILTRACION DE DATOS

	$("#btnBuscar").click(function()
	{
		var nombre = $("#buscar").val();

		$.ajax({
			'method': 'POST',
			'url' : 'buscar',
			'data' : {nombre:nombre}
		})
		.done(function(res){
			$("#tblUsuarios").html(res);
		});
	});

	//FIN FUNCION FILTRACION

	//FUNCIONES PARA MOVER DATOS DE TABLA A MODAL

	editarUsuario = function(codigo, user, nombre, apellido)
	{
		$("#mtxtcodigo").val(codigo);
		$("#mtxtuser").val(user);
		$("#mtxtnombre").val(nombre);
		$("#mtxtapellido").val(apellido);
	}

	eliminarUsuario = function(codigo, user, nombre, apellido)
	{
		$("#mtxtCodigo").val(codigo);
		$("#mtxtUsuario").val(user);
		$("#mtxtNombre").val(nombre);
		$("#mtxtApellido").val(apellido);
	}


	//FIN FUNCIONES MODAL
});