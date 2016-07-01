<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function login($usuario,$password)
	{
		// validamos que el usuario exista

		$logValido=0;
		$mensaje ='';
		$nombre_usuario='';
		$idGrupo=0;

		$user = $this->db->get_where('sg_usuarios',array('strUsuario' => $usuario));

		if($user->num_rows() > 0)
		{
			//Validamos el Password

			$this->db->from('sg_usuarios');
			$this->db->where('strUsuario',$usuario);
			$this->db->where('strPassword',md5($password));
			$pass=$this->db->get();

			if($pass->num_rows() > 0)
			{
				$row=$pass->row_array(0);

				$nombre_usuario=$row['strNombre'];
				$idGrupo=$row['idGrupo'];

				$logValido=1;
				$mensaje='Usuario Ingresado con exito';
			}else{

				$logValido=0;
				$mensaje='El Password es incorrecto';
			}
		}else{

			$logValido=0;
			$mensaje='El usuario no existe';
		}


		$respuesta = array('valido' => $logValido ,'mensaje' => $mensaje,'nombre_usuario' => $nombre_usuario,'grupo' => $idGrupo );

		return $respuesta;

	}

}


