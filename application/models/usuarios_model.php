<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Funciones para CRUD de USUARIO

	function mostrarRegistro()
	{
		$consulta = $this->db->query("SELECT * FROM usuarios where activo='1';");

		return $consulta->result();
	}

	function agregarUsuario($usuario, $pass, $nombre, $apellido)
	{
		$this->db->query("INSERT INTO usuarios VALUES('null', '$usuario', '$pass', '$nombre', '$apellido', '1')");
	}

	function modificarUsuario($codigo, $usuario, $pass, $nombre, $apellido)
	{
		if($pass == "")
		{
			$consulta = $this->db->query("UPDATE usuarios SET usuario='$usuario', Nombre='$nombre', Apellido ='$apellido' WHERE Codigo='$codigo'");
		}
		else
		{
			$consulta = $this->db->query("UPDATE usuarios SET usuario='$usuario', password='$pass', Nombre='$nombre', Apellido ='$apellido' WHERE Codigo='$codigo'");
		}
		return $consulta;
	}

	function eliminarUsuario($codigo)
	{
		$consulta = $this->db->query("UPDATE usuarios SET activo='0' WHERE Codigo='$codigo'");
		return $consulta;
	}


	//FIN FUNCIONES CRUD USUARIO

	//FUNCION PARA FILTRAR USUARIOS

	function buscarUsuario($nombre)
	{
		$consulta = $this->db->query("SELECT * FROM usuarios where Nombre like '%' '".$nombre."' '%';");
		$data = $consulta->result();
		$tabla = "<table>
					<caption style='text-align: center;''>REGISTRO DE USUARIOS</caption>
					<th>Codigo</th>
					<th>Username</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Accion</th>";

		if($data != null)
		{
			foreach ($data as $fila) 
			{
				$tabla .= "<tr>
								<td> $fila->Codigo </td>
								<td> $fila->usuario </td>
								<td> $fila->Nombre </td>
								<td> $fila->Apellido </td>";

							$tabla .= '<td> <center> <button id="btnModal" class="btn btn-primary" data-toggle="modal" data-target="#modalModificar" onclick="editarUsuario(\''.$fila->Codigo.'\',\''.$fila->usuario.'\',\''. $fila->Nombre.'\',\''.$fila->Apellido .'\''.');"> Modificar </button> </td> </center>
							</tr>';			
			}
			$tabla .= "</table>";
			return $tabla;
		}
		else
		{
			$mensaje = "<script>alert('No se encontraron resultados')</script>";
			return $mensaje;
		}
	}

	//FIN FUNCION USUARIOS
}

?>