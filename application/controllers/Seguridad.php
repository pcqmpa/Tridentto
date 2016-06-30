<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {


	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('seguridad/index');
	}

}

/* End of file Seguridad.php */
/* Location: ./application/controllers/Seguridad.php */