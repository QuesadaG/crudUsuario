<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_controller extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('usuarios_model');
		$this->load->database();
	}

	function index()
	{
		$usuarios["registro"] = $this->usuarios_model->mostrarRegistro();
		$this->load->view('vistas/header');
		$this->load->view('vistas/menu');
		$this->load->view('vistas/home', $usuarios);
		$this->load->view('vistas/footer');
	}

	//FUNCIONES PARA CRUD USUARIO
	
	function agregar()
	{
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$user = $this->input->post('usuario');
		$pass = sha1($this->input->post('pass'));	

		$respuesta = $this->usuarios_model->agregarUsuario($user, $pass, $nombre, $apellido);
		if($respuesta == true)
		{
			echo "Error al agregar el usuario";
		}
		else
		{
			echo "Usuario agregado correctamente";
		}
	
	}

	function modificar()
	{
		$codigo = $this->input->post('codigo');
		$user = $this->input->post('usuario');
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		if($this->input->post('pass') == "")
		{
			$pass = "";
		}
		else
		{
			$pass = sha1($this->input->post('pass'));	
		}
		$respuesta = $this->usuarios_model->modificarUsuario($codigo, $user, $pass, $nombre, $apellido);
	}

	function eliminar()
	{
		$codigo = $this->input->post('codigo');

		$respuesta = $this->usuarios_model->eliminarUsuario($codigo);
	}


	function buscar()
	{
		$nombre = $this->input->post('nombre');
		$consulta = $this->usuarios_model->buscarUsuario($nombre);
		echo $consulta;

	}

	//FIN FUNCIONES CRUD USUARIO


	//FUNCIONES PARA MOSTRAR FORMULARIOS
	
	function mostrarFormAgregar()
	{
		$this->load->view('vistas/header');
		$this->load->view('vistas/menu');
		$this->load->view('vistas/agregar');
		$this->load->view('vistas/footer');	
	}

	function mostrarFormModificar()
	{
		$data["registro"] = $this->usuarios_model->mostrarRegistro();
		$this->load->view('vistas/header');
		$this->load->view('vistas/menu');
		$this->load->view('vistas/modificar', $data);
		$this->load->view('vistas/footer');	
	}

	function mostrarFormEliminar()
	{
		$data["registro"] = $this->usuarios_model->mostrarRegistro();
		$this->load->view('vistas/header');
		$this->load->view('vistas/menu');
		$this->load->view('vistas/eliminar', $data);
		$this->load->view('vistas/footer');	
	}


	//FIN FUNCIONES MOSTRAR FORMULARIOS



}

?>