<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {


	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array('mensaje' =>'');
		$this->load->view('seguridad/index',$data);
	}

	public function login()
	{

		if($this->input->post('submit_val'))
		{
			//Capturo las variables 

			$usuario = $_POST['usuario'];
			$password = $_POST['password'];

			if($usuario==''){

				$data = array('mensaje' => 'Debe de ingresar un Usuario' );
				$this->load->view('seguridad/index',$data);

				return;
			}

			if($password == ''){

				$data = array('mensaje' => 'Debe de ingresar un Password' );
				$this->load->view('seguridad/index',$data);

				return;	
			}


			$this->load->model('seguridad_model');

			$respuesta=$this->seguridad_model->login($usuario,$password);

			$data = array('mensaje' => $respuesta['mensaje'] );
			$this->load->view('seguridad/index',$data);


		}else {

			$data = array('mensaje' => 'Hola Mundo' );
			$this->load->view('seguridad/index',$data);


		}
	}

}

/* End of file Seguridad.php */
/* Location: ./application/controllers/Seguridad.php */